<?php

namespace Database\Factories;

use App\Models\Actor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActorFactory extends Factory
{
    protected $model = Actor::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'age' => $this->faker->numberBetween(18, 100),
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'country' => $this->faker->country(),
            'has_won_awards' => $this->faker->boolean,
        ];
    }
}