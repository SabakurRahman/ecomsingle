<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'category_name'=>fake()->word,
            'slug' =>fake()->slug,
            'subcategory_count' => fake()->randomNumber(),
            'product_count' => fake()->randomNumber(),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
