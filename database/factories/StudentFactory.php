<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->firstName(),
            "last_name" => fake()->lastName(),
            "control" => fake()->numerify('########'),
            "email" => fake()->safeEmail(),
            "semester" => fake()->numberBetween($min=1, $max=15),
            "program_id" => Program::all()->random()->id

        ];
    }
}
