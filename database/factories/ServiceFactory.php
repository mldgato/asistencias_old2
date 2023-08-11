<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Supplier;
use App\Models\Insurance;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'insurance_id' => Insurance::all()->random()->id,
            'Operator' => $this->faker->name(),
            'assignmentDate' => $this->faker->date('Y-m-d'),
            'assignmentTime' => $this->faker->time('H:i:s'),
            'serviceType' => $this->faker->randomElement(['Asixpress', 'Vehículo asegurado', 'Tercero', 'Otro']),
            'supplier_id' => Supplier::all()->random()->id,
            'expert' => $this->faker->name(),
            'contactTime' => $this->faker->time('H:i:s'),
            'endingTime' => $this->faker->time('H:i:s'),
            'beneficiary' => $this->faker->name(),
            'address' => $this->faker->address(),
            'serviceWork' => $this->faker->randomElement(['Paso de corriente', 'Abasto de combustible', 'Cambio de llanta', 'Apertura de vehículo']),
            'pre-existingDamage' => $this->faker->randomElement(['Puerta derecha', 'Puerta izquierda', 'Neumático']),
            'maneuveringCost' => $this->faker->numberBetween(1000, 1500),
            'TotalCost' => $this->faker->numberBetween(1000, 1500),
            'notes' => $this->faker->sentence(200),
        ];
    }
}
