<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'password',
    ];

    protected $hidden = ['password'];

    // one to many relationship
    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function ratings() {
        return $this->hasMany(Rating::class);
    }

    public function cartItems() {
        return $this->hasMany(CartItem::class);
    }
}
