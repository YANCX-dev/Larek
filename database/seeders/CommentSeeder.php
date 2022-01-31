<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('comments')->insert([
            [
                'user_id'=> 1,
                'post_id'=> 2,
                'content'=>'Текст комментария 1',
                'created_at'=>now()

            ],
            [
                'user_id'=>2,
                'post_id'=>3,
                'content'=>'Текст комментария 2',
                'created_at'=>now()

            ],
            [
                'user_id'=>3,
                'post_id'=>5,
                'content'=>'Текст комментария 3',
                'created_at'=>now()

            ]
        ]);
    }
}
