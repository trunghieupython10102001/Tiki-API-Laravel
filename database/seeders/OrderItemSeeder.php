<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_items')->insert([
            [
                'amount' => 10,

                'product_id' => 1,
                'order_id' => 1,
            ],
            [
                'amount' => 20,

                'product_id' => 2,
                'order_id' => 2,
            ],
        ]);
    }
}
