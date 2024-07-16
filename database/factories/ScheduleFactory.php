<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Schedule;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'ruangan' => $this->faker->ruangan(),
            'tanggal_mulai' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'tanggal_berakhir' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'deskripsi' => $this->faker->sentence,
            'url' => $this->faker->url,
        ];
    }
}
