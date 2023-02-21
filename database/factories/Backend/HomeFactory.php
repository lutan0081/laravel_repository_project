<?php

namespace Database\Factories\Backend;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Backend\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'post_number' => Str::random(10),
            'address' => Str::random(155),
            'tel' => Str::random(10),
            'fax' => Str::random(10),
            'remember_token' => Str::random(10),
        ];
    }
}
