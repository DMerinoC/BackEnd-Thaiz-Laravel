<?php

namespace Database\Seeders;

use App\Models\Variable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariableSeeder extends Seeder
{
    public function run(): void
    {
        Variable::create([
            'id' => 1,
            'name' => 'titulo_pagina',
            'value' => 'Thaiz SPA',
            'state' => 'activo',
        ]);
        Variable::create([
            'id' => 2,
            'name' => 'anio',
            'value' => '2024',
            'state' => 'activo',
        ]);
        Variable::create([
            'id' => 3,
            'name' => 'usuario1',
            'value' => 'Camila Vallejo',
            'state' => 'activo',
        ]);
        Variable::create([
            'id' => 4,
            'name' => 'comentario1',
            'value' => 'El mejor spa',
            'state' => 'activo',
        ]);
        Variable::create([
            'id' => 5,
            'name' => 'foto1',
            'value' => 'foto',
            'state' => 'activo',
        ]);
    }
}
