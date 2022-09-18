<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PharIo\Manifest\Email;

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
            'content' => $this->faker->sentence(),
            'deleted_at' => $this->faker->date('Y-m-d H:m:s'),
            'user' => 1,
        ];
    }
}
