<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'like'=> $this->faker->boolean(),
            'content'=> $this->faker->sentence(),
            'deleted_at' => $this->faker->date('Y-m-d H:m:s'),
            'user'=> 1,
            'post_id' =>1,
        ];
    }
}
