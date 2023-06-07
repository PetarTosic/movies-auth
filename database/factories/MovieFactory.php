<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genre = ['horror', 'action', 'drama', 'thriller', 'comedy', 'fantasy'];
        return [
            'title' => $this->faker->sentence(rand(1, 5)),
            'director' => $this->faker->name(),
            'image_url' => $this->faker->imageUrl(),
            'duration' => $this->faker->numberBetween(40, 200),
            'release_date' => $this->faker->date(),
            'genre' => $genre[rand(0, 5)]
        ];
    }
}
