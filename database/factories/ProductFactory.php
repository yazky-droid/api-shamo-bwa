<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(1000,1000000),
            'description' => $this->faker->text(),
            'tags' => $this->faker->text(),
            'categories_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
