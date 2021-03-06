<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\OrderItem;
use Carbon\Carbon;

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
        $status = request()->status ? strtolower(request()->status): '';
        $recipient_name = request()->recipient_name ?? '';
        $user_id = request()->user_id ?? null;

        if ($user_id) {
            return OrderResource::collection(Order::with('orderItems.product')
            ->where('user_id', $user_id)->where('status', 'like', '%' . $status . '%')
            ->orderBy($sort_by, $order_by)->paginate($limit));
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

    public function statistic()
    {
        $count_all_orders = Order::count();
        $count_processing_orders = Order::where('status', 'processing')->count();
        $count_deliverying_orders = Order::where('status', 'deliverying')->count();
        $count_complete_orders = Order::where('status', 'complete')->count();
        $count_cancel_orders = Order::where('status', 'cancel')->count();

        $last_6_months = Order::where("created_at", ">", Carbon::now()->subMonths(6))->get();

        $data = [
            'order' => [
                'all' => $count_all_orders,
                'processing' => $count_processing_orders,
                'deliverying' => $count_deliverying_orders,
                'complete' => $count_complete_orders,
                'cancel' => $count_cancel_orders,
            ],
            'statistic' => $last_6_months->groupBy(function ($item) {
                return $item->created_at->format('n');
            })->map(function ($item) {
                return $item->count();
            })->toArray(),
        ];

        return response()->json([
            'status' => 200,
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $all = $request->all();
        $cart_items = $all['cart_items'];

        // remove cart_items
        unset($all['cart_items']);

        $new_order = Order::create($request->all());

        foreach ($cart_items as $cart_item) {
            $cart_item['order_id'] = $new_order->id;
            OrderItem::create($cart_item);
        }

        return response()->json([
            'status' => 201,
            'message' => 'T???o ????n h??ng th??nh c??ng',
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
                'message' => 'Kh??ng t??m th???y ????n h??ng'
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
                'message' => 'Kh??ng t??m th???y ????n h??ng'
            ], 404);
        }

        if (!$request->has('status')) {
            return response()->json([
                'status' => 400,
                'message' => 'Thi???u tham s??? status'
            ], 400);
        }

        if (strtolower($order->status) == 'complete' || strtolower($order->status) == 'cancel') {
            return response()->json([
                'status' => 400,
                'message' => 'Kh??ng th??? thay ?????i tr???ng th??i'
            ], 400);
        }

        $order->status = $request->status;
        $order->save();
        return response()->json([
            'status' => 200,
            'message' => 'C???p nh???t tr???ng th??i th??nh c??ng'
        ], 200);
    }
}
