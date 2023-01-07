<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'hit' => fake()->randomNumber(),
            'price' => fake()->randomNumber(),
            'purchase_price' => fake()->randomNumber(),
            'discount_possible' => fake()->boolean,
            'status' => fake()->randomNumber(),
        ];
    }
}
