<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => new EmployerFactory,
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(Job::SALARY_RANGES),
            'location' => fake()->locale(),
            'schedule' => fake()->randomElement(Job::SCHEDULE),
            'url' => fake()->url,
            'featured' => false
        ];
    }
}
