<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory {
    public function definition(): array {
        return [
            'item' => $this->faker->word, 
            'category' => $this->faker->numberBetween(1, 20),
            'price' => $this->faker->randomFloat(2, 1, 200),
        ];
    }
}
