<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class categoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(rand(1,3),true)
        ];
    }
}