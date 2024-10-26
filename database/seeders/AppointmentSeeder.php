<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::create([
            'id' => 1,
            'date' => '2024-10-27 12:00:00',
            'state' => 'activo',
            'user_id' => 3,
            'service_id' => 1,
        ]);
        Appointment::create([
            'id' => 2,
            'date' => '2024-11-03 12:00:00',
            'state' => 'activo',
            'user_id' => 4,
            'service_id' => 3,
        ]);
        Appointment::create([
            'id' => 3,
            'date' => '2024-11-10 12:00:00',
            'state' => 'activo',
            'user_id' => 5,
            'service_id' => 5,
        ]);
    }
}
