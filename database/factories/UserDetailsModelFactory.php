<?php

// UserDetailsModelFactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserDetailsModel;

class UserDetailsModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'eid' => $this->faker->unique()->randomNumber(),
            'address' => $this->faker->address(),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'dob' => $this->faker->date(),
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}
