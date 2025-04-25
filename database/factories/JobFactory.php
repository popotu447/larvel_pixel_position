<?php

namespace Database\Factories;

use App\Models\Employer;
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
            'employer_id'=>Employer::factory(),
            'title'=>fake()->jobTitle,
            'salary'=>fake()->randomElement(['$10000 USD', '$20000 USD', '$30000 USD', '$40000 USD', '$50000 USD']),
            'location'=>'Remote',
            'schedule'=>'Full Time',
            'url'=>fake()->url,
            'featured'=>false,

        ];
    }
}
