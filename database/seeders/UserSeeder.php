<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert([
            [
                'phone_number' => '0123542489',
                'email' => '1',
                'birthday' => '01-24-2001',
                'address' => '',
                'gender' => 1,
                'avatar_url' => 'https://i.picsum.photos/id/515/200/200.jpg?hmac=d6WMJkHOOB7pT-6y_yjHKrJdVp3v17ry6bMzGVuyb68',
                'nick_name' => '',
                'username' => 'Ngô Việt Hoàng',
                'nick_name' => '',
                'password' => bcrypt('123'),
                'is_admin' => 1
            ],
            [
                'phone_number' => '01235424819',
                'email' => '2',
                'birthday' => '01-24-2001',
                'address' => '',
                'gender' => 1,
                'avatar_url' => 'https://i.picsum.photos/id/515/200/200.jpg?hmac=d6WMJkHOOB7pT-6y_yjHKrJdVp3v17ry6bMzGVuyb68',
                'nick_name' => '',
                'username' => 'Phí Trung Hiếu',
                'nick_name' => '',
                'password' => bcrypt('123'),
                'is_admin' => 0
            ],
            [
                'phone_number' => '01235424089',
                'email' => '3',
                'birthday' => '01-24-2001',
                'address' => '',
                'gender' => 1,
                'avatar_url' => 'https://i.picsum.photos/id/515/200/200.jpg?hmac=d6WMJkHOOB7pT-6y_yjHKrJdVp3v17ry6bMzGVuyb68',
                'nick_name' => '',
                'username' => 'Phạm Minh Hiếu',
                'nick_name' => '',
                'password' => bcrypt('123'),
                'is_admin' => 0
            ],
        ]);
    }
}
