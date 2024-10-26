<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'id' => 1,
            'name' => 'Corte Dama',
            'price' => 10.50,
            'description' => 'El mejor corte para dama',
            'image' => 'imagen',
            'state' => 'activo',
            'type_of_service_id' => 1
        ]);
        Service::create([
            'id' => 2,
            'name' => 'Corte Barón',
            'price' => 10.50,
            'description' => 'El mejor corte para barón',
            'image' => 'imagen',
            'state' => 'activo',
            'type_of_service_id' => 1
        ]);
        Service::create([
            'id' => 3,
            'name' => 'Laceado',
            'price' => 40.00,
            'description' => 'Laceado para todos',
            'image' => 'imagen',
            'state' => 'activo',
            'type_of_service_id' => 2
        ]);
        Service::create([
            'id' => 4,
            'name' => 'Teñido de cabello',
            'price' => 100.00,
            'description' => 'Cualquier color que elijas',
            'image' => 'imagen',
            'state' => 'activo',
            'type_of_service_id' => 2
        ]);
        Service::create([
            'id' => 5,
            'name' => 'Masajes',
            'price' => 85.00,
            'description' => 'Masajes relajantes',
            'image' => 'imagen',
            'state' => 'activo',
            'type_of_service_id' => 3
        ]);
        Service::create([
            'id' => 6,
            'name' => 'Pedicura',
            'price' => 30.00,
            'description' => 'Para manos',
            'image' => 'imagen',
            'state' => 'activo',
            'type_of_service_id' => 3
        ]);
    }
}
