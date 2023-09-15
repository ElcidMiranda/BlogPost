<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Title' => $this->faker->unique()->company(),
            'Author' => $this->faker->unique()->name(),
            'Content' => $this->faker->paragraph(),
            'ImagePath' => $this->faker->imageUrl(200,200),
            'isPublished' => $this->faker->boolean(),
            'category_id' =>$this->faker->numberBetween(1,3),
        ];
    }
}
