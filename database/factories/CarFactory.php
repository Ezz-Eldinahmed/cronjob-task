<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'model' => $this->faker->name(),
            'body_number' => $this->faker->name(),
            'motor_number' => $this->faker->name(),
            'color' => $this->faker->name(),
            'model_year' => $this->faker->name(),
        ];
    }
}
