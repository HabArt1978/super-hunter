<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $seed = fake()->unique()->numberBetween(1, 10000);

        return [
            'name' => fake()->company(),
            'logo' => "https://picsum.photos/seed/{$seed}/90/90",
        ];
    }
}
