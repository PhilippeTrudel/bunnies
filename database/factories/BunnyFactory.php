<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bunny>
 */
class BunnyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ears = ['lop', 'short', 'long', 'helicopter'];
        $furs = ['long', 'short', 'clean', 'dirty'];

        return [
            'name' => $this->faker->name(),
            'color' => $this->faker->hexColor(),
            'ear' => $ears[rand(0, 3)],
            'fur' => $furs[rand(0, 3)]
        ];
    }
}
