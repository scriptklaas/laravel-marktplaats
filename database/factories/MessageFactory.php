<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'sender_id' => $this->faker->numberBetween(1,10),
            'receiver_id' => $this->faker->numberBetween(1,10),
            'post_id' => $this->faker->numberBetween(1,50),
        ];
    }
}
