<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // intellephense wrong here
        return [
            'title' => fake()->words(3, true),
            'thumbnail' => fake()->imageUrl(),
            'description' => fake()->paragraph(2), 
            'tags' => str_replace(' ', ',', fake()->words(2, true))
        ];
    }
}
