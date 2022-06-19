<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Http\Requests\StoreCartItemRequest;
use App\Http\Requests\UpdateCartItemRequest;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = request()->user_id ?? null;

        $cart_items = CartItem::with('product')->where('user_id', $user_id)->get();

        $fee_ship = 20000;
        $total_price = 0;

        foreach ($cart_items as $cart_item) {
            $total_price += $cart_item->total_price;
        }

        $data = [
            'cart_items' => $cart_items,
            'total_price' => $total_price,
            'fee_ship' => $fee_ship,
            'total_price_with_fee_ship' => $total_price + $fee_ship,
        ];

        return response()->json([
            'data' => $data
        ]);
    }

    public function count_amount()
    {
        $user_id = request()->user_id ?? null;

        $cart_items = CartItem::with('product')->where('user_id', $user_id)->get();

        $total_amount = 0;

        foreach ($cart_items as $cart_item) {
            $total_amount += $cart_item->amount;
        }

        return response()->json([
            'data' => $total_amount
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartItemRequest $request)
    {
        $product_id = $request->product_id ?? null;
        $user_id = $request->user_id ?? null;

        // check is exist | if exist => only update amount
        $cart_item = CartItem::where('product_id', $product_id)->where('user_id', $user_id)->first();

        $message = 'Tạo mới thành công';

        if ($cart_item) {
            // check request amount = 0 => delete cart item
            if ($request->amount == 0) {
                $cart_item->delete();
                $message = 'Xóa thành công';
            } else {

                $cart_item->amount = $request->amount;
                $cart_item->save();

                $message = 'Cập nhật thành công';
            }
        } else {
            $cart_item = CartItem::create($request->all());
        }

        return response()->json([
            'status' => 200,
            'message' => $message,
        ]);
    }
}
