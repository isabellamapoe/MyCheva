<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Providers\CustomProvider;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */

     public function run()
     {
        User::factory()
            ->count(25)
            ->hasSchedules(10)
            ->create();

        User::factory()
            ->count(100)
            ->hasSchedules(5)
            ->create();

        User::factory()
            ->count(100)
            ->hasSchedules(3)
            ->create();

        User::factory()
            ->count(6)
            ->hasSchedules(10)
            ->create();
     }
}