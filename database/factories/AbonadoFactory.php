<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abonado>
 */
class AbonadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $linea = $this->faker->phoneNumber;
        $simcard = $this->faker->word(20);

        return [
            'linea' => $linea,
            'simcard' => $simcard
        ];
    }
}
