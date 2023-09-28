<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Intent>
 */
class IntentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucwords(implode(' ', fake()->words())),
            'user_id' => User::all()->random()->id,
            'successful' => fake()->boolean(90)
        ];
    }
}
