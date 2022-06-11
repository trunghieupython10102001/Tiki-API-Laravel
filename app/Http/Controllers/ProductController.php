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
        $from = request()->from ?? 0;
        $to = request()->to ?? 10000000000000000000;
        $search = request()->search ?? '';
        $random = request()->random ?? 0;

        $category_id = request()->category_id ?? null;

        if ($category_id) {
            return ProductResource::collection(Product::where('category_id', $category_id)->orderBy($sort_by, $order_by)->paginate($limit));
        }

        $data = Product::with('ratings')
            ->where('price', '>=', $from)
            ->where('price', '<=', $to)
            ->where('name', 'like', '%' . $search . '%')
            ->orderBy($sort_by, $order_by)
            ->paginate($limit);

        // if ($rating) {
        //     $data = $data->filter(function ($item) use ($rating) {
        //         return $item->ratings->avg('rating') >= $rating;
        //     });

        //     $res_data['data'] = $data;
        // }

        // if ($random) {
        //     $data = $data->shuffle();
        //     $res_data['data'] = $data;
        // }

        return ProductResource::collection($data);
        // return ProductResource::collection($data);
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
            'message' => 'Create product successfully',
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
        $product = Product::find($productId);
        if (!$product) {
            return response()->json([
                'status' => 404,
                'message' => 'Product not found'
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'message' => 'Get product successfully',
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
                'message' => 'Product not found'
            ], 404);
        }

        $product->update($request->all());
        return response()->json([
            'status' => 200,
            'message' => 'Update product successfully',
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
                'message' => 'Product not found'
            ], 404);
        }

        // check auth

        $product->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Product deleted'
        ]);
    }
}
