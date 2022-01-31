<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('posts')->insert([
            [
                'title' => 'Статья 1',
                'content' => 'Текст статьи 1',
                'image'=>$faker->imageUrl(),
                'user_id' => 1,
                'created_at'=>now()

            ],
            [
                'title' => 'Статья 2',
                'content' => 'Текст статьи 2',
                'image'=>$faker->imageUrl(),
                'user_id' => 2,
                'created_at'=>now()

            ],
            [
                'title' => 'Статья 3',
                'content' => 'Текст статьи 3',
                'image'=>$faker->imageUrl(),
                'user_id' => 2,
                'created_at'=>now()

            ],
            [
                'title' => 'Статья 4',
                'content' => 'Текст статьи 4',
                'image'=>$faker->imageUrl(),
                'user_id' => 2,
                'created_at'=>now()

            ],
            [
                'title' => 'Статья 5',
                'content' => 'Текст статьи 5',
                'image'=>$faker->imageUrl(),
                'user_id' => 2,
                'created_at'=>now()

            ],
        ]);

    }
}
