<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(), // Email único
            'password' => bcrypt('password'), 
            'rol_id' => rand(1,10),
        ];
    }
}
