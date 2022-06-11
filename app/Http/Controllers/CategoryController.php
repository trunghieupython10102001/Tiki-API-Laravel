<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
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

        $search = request()->search ?? null;

        return CategoryResource::collection(
            Category::withCount('products')
                ->where('name', 'like', '%' . $search . '%')
                ->orderBy($sort_by, $order_by)
                ->paginate($limit)
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $all = $request->all();

        if ($request->hasFile('image_url')) {
            $ext = $request->file('image_url')->extension();
            $generate_unique_file_name = md5(time()) . '.' . $ext;
            $request->file('image_url')->move('images', $generate_unique_file_name, 'local');

            $all['image_url'] = 'images/' . $generate_unique_file_name;
        }

        Category::create($request->all());
        return response()->json([
            'status' => 201,
            'message' => 'Thêm mới danh mục thành công'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($categoryId)
    {
        $category = Category::find($categoryId);
        if (!$category) {
            return response()->json([
                'status' => 404,
                'message' => 'Không tìm thấy danh mục'
            ], 404);
        }

        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $categoryId)
    {
        $category = Category::find($categoryId);
        if (!$category) {
            return response()->json([
                'status' => 404,
                'message' => 'Không tìm thấy danh mục'
            ], 404);
        }

        $all = $request->all();

        if ($request->hasFile('image_url')) {
            $ext = $request->file('image_url')->extension();
            $generate_unique_file_name = md5(time()) . '.' . $ext;
            $request->file('image_url')->move('images', $generate_unique_file_name, 'local');

            $all['image_url'] = 'images/' . $generate_unique_file_name;

            // delete old image in system
            if ($category->image_url) {
                $old_image = $category->image_url;
                $old_image_path = public_path($old_image);
                if (file_exists($old_image_path)) {
                    unlink($old_image_path);
                }
            }
        }

        $category->update($all);
        return response()->json([
            'status' => 200,
            'message' => 'Cập nhật danh mục thành công'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryId)
    {
        // check auth

        $category = Category::find($categoryId);
        if (!$category) {
            return response()->json([
                'status' => 404,
                'message' => 'Không tìm thấy danh mục'
            ], 404);
        }

        $category->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Xóa danh mục thành công'
        ], 200);
    }
}
