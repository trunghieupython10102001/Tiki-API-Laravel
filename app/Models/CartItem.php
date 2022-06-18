<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',

        'user_id',
        'product_id',
    ];

    protected $appends = [
        'total_price',
    ];

    public function getTotalPriceAttribute()
    {
        return $this->amount * $this->product->price;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
