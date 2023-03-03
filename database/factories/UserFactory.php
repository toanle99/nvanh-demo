<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname'         => fake()->firstname(),
            'lastname'          => fake()->lastname(),
            'birthday'          => fake()->date(),
            'username'          => fake()->username(),
            'email'             => fake()->unique()->safeEmail(),
            'password'          => '123123',
            'remember_token'    => Str::random(10),
        ];
    }
}
