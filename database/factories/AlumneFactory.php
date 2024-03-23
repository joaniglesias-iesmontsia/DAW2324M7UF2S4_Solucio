<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumne>
 */
class AlumneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni_nie' => $this->faker->numberBetween(10000000, 99999999) . strtoupper($this->faker->randomLetter()),
            'nom_complet' => $this->faker->name(),
            'data_naixement' => $this->faker->date(),
        ];
    }
}
