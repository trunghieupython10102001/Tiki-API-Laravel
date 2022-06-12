<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'phone_number',
        'password',
        'username',
        'email',
        'nick_name',
        'birthday',
        'address',
        'gender',
        'avatar_url',
        'is_admin'
    ];

    protected $hidden = [
        'password',
    ];

    // one to many relationship
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
