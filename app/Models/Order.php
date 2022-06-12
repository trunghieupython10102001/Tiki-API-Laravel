<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'address',
        'phone_number',
        'order_date',
        'recipient_name',
        'payment_method',

        'user_id'
    ];

    protected $appends = ['discount', 'amount'];

    public function getDiscountAttribute()
    {
        $discount = 0;
        foreach ($this->orderItems as $orderItem) {
            $discount += $orderItem->product->discount * $orderItem->amount;
        }

        return $discount;
    }

    public function getAmountAttribute()
    {
        $amount = 0;
        foreach ($this->orderItems as $orderItem) {
            $amount += $orderItem->product->price * $orderItem->amount;
        }

        return $amount - $this->discount;
    }

    // get user that owns order
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
