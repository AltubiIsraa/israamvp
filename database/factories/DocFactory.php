<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class DocFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement(User::all())->id,
            'subject' => $this->faker->sentence(),
            'grade' => $this->faker->sentence(),
            'title' => $this->faker->sentence(),
            'Desc' => $this->faker->sentence(),
        ];
    }
}
