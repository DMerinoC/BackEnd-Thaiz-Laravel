<?php

namespace Database\Seeders;

use App\Models\TypeOfService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeOfServiceSeeder extends Seeder
{
    public function run(): void
    {
        TypeOfService::create([
            'id' => 1,
            'description' => 'Cortes General',
            'state' => 'activo'
        ]);
        TypeOfService::create([
            'id' => 2,
            'description' => 'Servicios belleza',
            'state' => 'activo'
        ]);
        TypeOfService::create([
            'id' => 3,
            'description' => 'Spa',
            'state' => 'activo'
        ]);
    }
}
