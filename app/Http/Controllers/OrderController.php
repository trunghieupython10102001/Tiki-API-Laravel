<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
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

        return OrderResource::collection(Order::orderBy($sort_by, $order_by)->paginate($limit));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        Order::create($request->all());
        return response()->json([
            'status' => 201,
            'message' => 'Create order successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($orderId)
    {
        $order = Order::find($orderId);
        if (!$order) {
            return response()->json([
                'status' => 404,
                'message' => 'Order not found'
            ], 404);
        }

        return new OrderResource($order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, $orderId)
    {
        $order = Order::find($orderId);
        if (!$order) {
            return response()->json([
                'status' => 404,
                'message' => 'Order not found'
            ], 404);
        }

        if (!$request->has('status')) {
            return response()->json([
                'status' => 400,
                'message' => 'Thiếu tham số status'
            ], 400);
        }

        if (strtolower($order->status) != 'processing') {
            return response()->json([
                'status' => 400,
                'message' => 'Không thể thay đổi trạng thái'
            ], 400);
        }

        $order->status = $request->status;
        $order->save();
        return response()->json([
            'status' => 200,
            'message' => 'Cập nhật trạng thái thành công'
        ], 200);
    }
}
