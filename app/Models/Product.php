<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $appends = ['avg_ratings', 'discount'];

    protected $fillable = [
        'name',
        'brand',
        'thumbnail_url',
        'quantity',
        'sold',
        'description',
        'sale_percent',
        'price',
        'specifications',

        'category_id',
    ];

    protected $hidden = [
        'ratings',
    ];

    public function getAvgRatingsAttribute()
    {
        $ratings = $this->ratings;
        $total = 0;
        foreach ($ratings as $rating) {
            $total += $rating->rating;
        }

        $count = $ratings->count();

        if ($count == 0) {
            return 0;
        }

        return $total / $count;
    }

    public function getDiscountAttribute()
    {
        // return $this->price * (1 - $this->sale_percent / 100);
        return $this->price * ($this->sale_percent / 100);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
