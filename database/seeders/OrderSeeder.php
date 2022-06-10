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


    // {
    //     id: '616c9a889gh30500169d5c0f',
    //     orders: [
    //         {
    //             id: 1,
    //             name: 'Tên sản phẩm 1',
    //             image: 'https://images.unsplash.com/photo-1644982653424-1bfed7f972a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=789&q=80',
    //             category: 'Nước ép hạt',
    //             createTime: 1652149368173,
    //             price: 100,
    //             amount: 10,
    //         },
    //         {
    //             id: 2,
    //             name: 'Tên sản phẩm 1',
    //             image: 'https://images.unsplash.com/photo-1644982653424-1bfed7f972a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=789&q=80',
    //             category: 'Nước ép hạt',
    //             createTime: 1652149368173,
    //             price: 100,
    //             amount: 10,
    //         },
    //         {
    //             id: 3,
    //             name: 'Tên sản phẩm 1',
    //             image: 'https://images.unsplash.com/photo-1644982653424-1bfed7f972a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=789&q=80',
    //             category: 'Nước ép hạt',
    //             createTime: 1652149368173,
    //             price: 100,
    //             amount: 10,
    //         },
    //     ],
    //     phone: '01718890326',
    //     discount: 0,
    //     name: 'S. Sakib',
    //     address: 'Dhaka, Bangladesh',
    //     note: 'abc',
    //     state: processing,
    //     amount: 1581,
    //     shipping: 20,
    //     total: 1601,
    //     user: '61531a4f1c38473378ab0829',
    //     createTime: '2022-05-06T06:04:52.338Z',
    // }

    public function run()
    {
        DB::table('orders')->insert([
            [
                'status' => 'processing',
                'address' => "Hà Nội",
                'phone_number' => '0123456789',
                'order_date' => '2020-05-06',
                'recipient_name' => 'Sakib',
                'payment_method' => 'offline',

                'user_id' => 1,
            ],
            [
                'status' => 'complete',
                'address' => "Hà Nội",
                'phone_number' => '01256789',
                'order_date' => '2020-05-06',
                'recipient_name' => 'Sakib 2',
                'payment_method' => 'offline',

                'user_id' => 3,
            ],

        ]);
    }
}
