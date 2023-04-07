<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Qualification;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Qualification>
 */
class QualificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Qualification::class;
    public function definition(): array
    {
        return [
            'platform' => $this->faker->numberBetween(1, 10),
            'classwork' => $this->faker->numberBetween(1, 10),
            'assistance' => $this->faker->numberBetween(1, 10),
            'advisory' => $this->faker->boolean(50),
            'observations' => $this->faker->sentence(),
            'matter_id' => \App\Models\Matter::all()->random()->id,
            'user_id' => \App\Models\User::all()->random()->id,
            'student_id' => \App\Models\Student::all()->random()->id,
        ];
    }
}
