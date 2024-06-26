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
            'title' => $this->faker->sentence(rand(5,10), true),
            'content' => $this->faker->sentences(5, true),
            'image' => 'https://placehold.co/600x400/png'
        ];
    }
}
