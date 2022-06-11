<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = request()->limit ?? 100;
        $sort_by = request()->sort_by ?? 'created_at';
        $order_by = request()->order_by ?? 'asc';

        $rating = request()->rating ?? 0;
        $random = request()->random ?? 0;
        $price_from = request()->price_from ?? 0;
        $price_to = request()->price_to ?? 10000000000000000000;
        $search = request()->search ?? '';
        $search_type = request()->search_type ?? 'name';
        $from = request()->from ?? null;
        $to = request()->to ?? '9000-12-12';

        $category_id = request()->category_id ?? null;

        if ($category_id) {
            return ProductResource::collection(Product::where('category_id', $category_id)->orderBy($sort_by, $order_by)->paginate($limit));
        }

        if ($rating != null) {
            $data = Product::all()->where('avg_ratings', '>=', $rating);

            $data = $data->slice(0, $limit);

            return ProductResource::collection($data);
        }

        if ($random) {
            $data = Product::inRandomOrder()->limit($limit)->get();

            return ProductResource::collection($data);
        }

        $data = Product::withCount('ratings')
            ->whereBetween('price', [$price_from, $price_to])
            ->whereBetween('created_at', [$from, $to])
            ->where($search_type, 'like', '%' . $search . '%')
            ->orderBy($sort_by, $order_by)
            ->paginate($limit);


        return ProductResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());

        return response()->json([
            'status' => 201,
            'message' => 'Thêm mới sản phẩm thành công',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($productId)
    {
        $product = Product::withCount('ratings')->find($productId);

        if (!$product) {
            return response()->json([
                'status' => 404,
                'message' => 'Không tìm thấy sản phẩm'
            ], 404);
        }

        $product->rating_1 = $product->ratings->where('rating', 1)->count();
        $product->rating_2 = $product->ratings->where('rating', 2)->count();
        $product->rating_3 = $product->ratings->where('rating', 3)->count();
        $product->rating_4 = $product->ratings->where('rating', 4)->count();
        $product->rating_5 = $product->ratings->where('rating', 5)->count();

        return response()->json([
            'status' => 200,
            'data' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $productId)
    {
        // check auth

        $product = Product::find($productId);
        if (!$product) {
            return response()->json([
                'status' => 404,
                'message' => 'Không tìm thấy sản phẩm'
            ], 404);
        }

        $product->update($request->all());
        return response()->json([
            'status' => 200,
            'message' => 'Cập nhật sản phẩm thành công',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($productId)
    {
        $product = Product::find($productId);
        if (!$product) {
            return response()->json([
                'status' => 404,
                'message' => 'Không tìm thấy sản phẩm'
            ], 404);
        }

        // check auth

        $product->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Xóa sản phẩm thành công'
        ]);
    }
}
