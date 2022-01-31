<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(60)->create();
         \App\Models\Post::factory(50)->create();
         \App\Models\Comment::factory(100)->create();
//        $this->call(UserSeeder::class);
//        $this->call(PostSeeder::class);
//        $this->call(CommentSeeder::class);

    }
}

