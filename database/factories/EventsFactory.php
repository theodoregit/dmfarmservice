<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Events;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Events::class;
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'location' => $this->faker->name,
            'cost' => $this->faker->randomDigit,
            'date' => $this->faker->date,
            'time' => $this->faker->time,
            'duration' => $this->faker->randomDigit,
            'organizer' => $this->faker->name,
        ];
    }
}
