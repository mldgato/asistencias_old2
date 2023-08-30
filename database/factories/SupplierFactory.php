<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'taxnumber' => $this->faker->unique()->numberBetween(11111111, 99999999),
            'company' => $this->faker->company(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'contact' => $this->faker->name(),
            'cod' => $this->faker->unique()->randomNumber(8) . Str::random(12), // Genera un valor único para 'cod'
        ];
    }
}
