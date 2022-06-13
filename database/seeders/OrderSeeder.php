<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('orders')->insert([
            [
                'status' => 'processing',
                'address' => "Hà Nội",
                'phone_number' => '0123456789',
                'order_date' => '2022-05-06',
                'recipient_name' => 'Sakib',
                'payment_method' => 'offline',
                'created_at' => '2022-06-06',

                'user_id' => 1,
            ],
            [
                'status' => 'complete',
                'address' => "Hà Nội",
                'phone_number' => '01256789',
                'order_date' => '2022-05-06',
                'recipient_name' => 'Sakib 2',
                'payment_method' => 'offline',
                'created_at' => '2022-05-05',

                'user_id' => 3,
            ],
            [
                'status' => 'complete',
                'address' => "Hà Nội",
                'phone_number' => '01256789',
                'order_date' => '2022-05-06',
                'recipient_name' => 'Sakib 2',
                'payment_method' => 'offline',
                'created_at' => '2022-04-04',

                'user_id' => 3,
            ],
            [
                'status' => 'complete',
                'address' => "Hà Nội",
                'phone_number' => '01256789',
                'order_date' => '2022-05-06',
                'recipient_name' => 'Sakib 2',
                'payment_method' => 'offline',
                'created_at' => '2022-03-03',

                'user_id' => 3,
            ],
            [
                'status' => 'complete',
                'address' => "Hà Nội",
                'phone_number' => '01256789',
                'order_date' => '2022-05-06',
                'recipient_name' => 'Sakib 2',
                'payment_method' => 'offline',
                'created_at' => '2022-02-02',

                'user_id' => 3,
            ],
        ]);
    }
}
