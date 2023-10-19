<?php

namespace Database\Factories;

use App\Models\Post;
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
            "text" => $this->faker->text(),
            "commentable_id" => Post::factory(),
            "commentable_type" => Post::class,
        ];
    }
}
