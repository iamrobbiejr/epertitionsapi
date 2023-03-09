<?php

namespace Database\Factories;

use App\Models\Pertition;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pertition>
 */
class PertitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'title' => $this->faker->word,
            'category' => $this->faker->text(50),
            'description' => $this->faker->text(200),
            'author' => $this->faker->name,
            'signatures' => $this->faker->numberBetween(0, 1000000)
        ];
    }
}
