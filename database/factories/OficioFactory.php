<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Oficio>
 */
class OficioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'folio' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'fecha' => $this->faker->date($format = 'd-m-y', $max = 'now'),
            'hora' => $this->faker->time($format = 'H:i ', $max = 'now'),
            'noOficio' => $this->faker->numberBetween($min = 1, $max = 100),
            'dependencia' => $this->faker->name,
            'remitente' => $this->faker->name,
            'asunto' => $this->faker->name,
            'telefono' => $this->faker->name,
            'observacion' => $this->faker->name,
            'recibe' => $this->faker->name
        ];
    }
}
