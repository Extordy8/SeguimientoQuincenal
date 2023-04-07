<?php

namespace Database\Factories;
use App\Models\Group;
use App\Models\User;
use App\Models\Matter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->paragraph
        ];
    }

        public function configure()
    {
        return $this->afterCreating(function (Group $group) {
            $users = User::inRandomOrder()->limit(10)->get();
            $group->users()->attach($users);

            $matters = Matter::inRandomOrder()->limit(10)->get();
            $group->matters()->attach($matters);

            echo "Datos de la tabla intermedia: \n";
        foreach ($group->matters as $matter) {
            echo "group_id: " . $group->id . ", matter_id: " . $matter->id . "\n";
        }
            
        });
    }

}
