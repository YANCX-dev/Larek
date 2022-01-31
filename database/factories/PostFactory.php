<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word(),
            'content'=>$this->faker->text($maxNbChars=200),
            'image'=>$this->faker->imageUrl(),
            'user_id'=>rand(1,10),
            ];
    }
}
