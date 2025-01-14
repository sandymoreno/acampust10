<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'middle_initial' => strtoupper($this->faker->optional()->randomLetter),
            'loan' => $this->faker->randomFloat(2, 0, 1000),
            'value' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
