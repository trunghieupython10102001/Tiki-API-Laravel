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

        $phone_number = request()->phone_number ?? '';
        $id = request()->id ?? '';
        $status = request()->status ?? '';
        $recipient_name = request()->recipient_name ?? '';
        $user_id = request()->user_id ?? null;

        if ($user_id) {
            return OrderResource::collection(Order::with('orderItems.product')->where('user_id', $user_id)->orderBy($sort_by, $order_by)->paginate($limit));
        }

        $data = Order::with('orderItems.product')
            ->where('id', 'like', '%' . $id . '%')
            ->where('phone_number', 'like', '%' . $phone_number . '%')
            ->where('status', 'like', '%' . $status . '%')
            ->where('recipient_name', 'like', '%' . $recipient_name . '%')
            ->orderBy($sort_by, $order_by)
            ->paginate($limit);

        return OrderResource::collection($data);
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
            'message' => 'Tạo đơn hàng thành công',
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
                'message' => 'Không tìm thấy đơn hàng'
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
                'message' => 'Không tìm thấy đơn hàng'
            ], 404);
        }

        if (!$request->has('status')) {
            return response()->json([
                'status' => 400,
                'message' => 'Thiếu tham số status'
            ], 400);
        }

        if (strtolower($order->status) == 'complete' || strtolower($order->status) == 'cancel') {
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
