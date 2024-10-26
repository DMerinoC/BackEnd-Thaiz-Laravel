<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    public function run(): void
    {
        UserType::create([
            'id' => 1,
            'description' => 'Administrador',
            'state' => 'activo'
        ]);
        UserType::create([
            'id' => 2,
            'description' => 'Trabajador',
            'state' => 'activo'
        ]);
        UserType::create([
            'id' => 3,
            'description' => 'Usuario verificado',
            'state' => 'activo'
        ]);
        UserType::create([
            'id' => 4,
            'description' => 'Usuario no verificado',
            'state' => 'activo'
        ]);
    }
}
