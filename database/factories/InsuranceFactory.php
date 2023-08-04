<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Insurance>
 */
class InsuranceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomNumbers = $this->faker->numberBetween(100, 999);
        $randomLetters = $this->faker->randomElements(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'], 3);
        $plate = "P-" . $randomNumbers . implode('', $randomLetters);
        
        return [
            'policy' => $this->faker->numberBetween(10000, 99999),
            'insuredLastName' => $this->faker->lastName(),
            'insuredFirstName' => $this->faker->firstName(),
            'vehicleBrand' => $this->faker->randomElement(['Toyota', 'Mazda', 'Honda', 'BMW', 'Mercedes-Benz', 'Audi', 'Ford', 'Chevrolet']),
            'vehicleLine' => $this->faker->word(),
            'vehicleType' => $this->faker->randomElement(['Coupé', 'Pick-up', 'Sedan', 'Camión', 'Motocicleta']),
            'vehicleYear' => $this->faker->numberBetween(2000, 2023),
            'vehicleColor' => $this->faker->colorName(),
            'vehiclePlate' => $plate,
        ];
    }
}
