<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            VariableSeeder::class,
            TypeOfServiceSeeder::class,
            UserTypeSeeder::class,
            UserSeeder::class,
            ServiceSeeder::class,
            DiscountSeeder::class,
            AppointmentSeeder::class,
        ]);
    }
}
