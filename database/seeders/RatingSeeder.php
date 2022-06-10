<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            [
                'rating' => 4,
                'comment' => 'This is a comment',

                'user_id' => 1,
                'product_id' => 1,
            ],
            [
                'rating' => 3,
                'comment' => 'This is a comment',

                'user_id' => 1,
                'product_id' => 1,
            ],
            [
                'rating' => 3,
                'comment' => 'This is a comment 2',

                'user_id' => 2,
                'product_id' => 2,
            ],
            [
                'rating' => 3,
                'comment' => 'This is a comment 2',

                'user_id' => 2,
                'product_id' => 3,
            ],
            [
                'rating' => 3,
                'comment' => 'This is a comment 2',

                'user_id' => 2,
                'product_id' => 1,
            ],
        ]);
    }
}
