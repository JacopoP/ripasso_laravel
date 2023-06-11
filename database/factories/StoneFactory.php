<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stone>
 */
class StoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(rand(1, 5)),
            'description' => fake()->boolean() ? fake()->sentence(rand(15, 30)) : null,
            'image' => 'default.jpg',
            'place_of_find' => 'Bergamo e provincia'
        ];
    }
}
