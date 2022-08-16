<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Training>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $started_at = now()->addMonths(rand(-6, 0));
        $ended_at = $started_at->copy()->addDays(rand(1, 5));

        return [
            'name' => 'Training Laravel Framework Level ' . fake()->randomELement(['Basic', 'Intermediate', 'Advanced']),
            'venue' => fake('ms_MY')->address(),
            'started_at' => $started_at,
            'ended_at' => $ended_at,
        ];
    }
}
