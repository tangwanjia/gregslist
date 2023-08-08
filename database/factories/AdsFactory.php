<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ads>
 */
class AdsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this ->faker -> sentence(5),
            'description'=>$this ->faker ->paragraph(10),
            'amount'=>$this -> faker -> numberBetween(0, 100000000),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now()
        ];
    }
}
