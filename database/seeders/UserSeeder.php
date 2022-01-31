<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
//use Psy\Util\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('users')->insert([
               [ 'name'=>'Иван',
                'surname'=>'Петров',
                'email'=>$faker->safeEmail(),
                'password'=> Str::random(10),
                'remember_token'=>Str::random(10),
                   'created_at'=>now()
               ],
            [ 'name'=>'Петр',
                'surname'=>'Иванов',
                'email'=>$faker->safeEmail(),
                'password'=> Str::random(10),
                'remember_token'=>Str::random(10),
                'created_at'=>now()
            ],
            [ 'name'=>'Коля',
                'surname'=>'Колянов',
                'email'=>$faker->safeEmail(),
                'password'=> Str::random(10),
                'remember_token'=>Str::random(10),
                'created_at'=>now()
            ]
        ]);
    }
}
