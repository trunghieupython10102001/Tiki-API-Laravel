<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart_items')->insert([
            [
                'amount' => 10,

                'product_id' => 1,
                'user_id' => 1,
            ],
            [
                'amount' => 20,

                'product_id' => 2,
                'user_id' => 2,
            ]
        ]);
    }
}
