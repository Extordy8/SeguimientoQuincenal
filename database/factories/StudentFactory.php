<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Group;
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
            'name' => $this->faker->firstName,
            'surnames' => $this->faker->lastName,
            'enrollment' => $this->faker->unique()->regexify('[A-Z]{2}\d{6}'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Student $student) {
            $group = Group::inRandomOrder()->first();
            $student->group()->associate($group)->save();
        });

    }
}
