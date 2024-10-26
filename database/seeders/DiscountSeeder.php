<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    public function run(): void
    {
        Discount::create([
            'id' => 1,
            'discount' => 10.00,
            'description' => 'Descuento para el servicio especificado',
            'state' => 'activo',
            'service_id' => 1,
        ]);
        Discount::create([
            'id' => 2,
            'discount' => 10.00,
            'description' => 'Descuento para el servicio especificado',
            'state' => 'activo',
            'service_id' => 1,
        ]);
        Discount::create([
            'id' => 3,
            'discount' => 10.00,
            'description' => 'Descuento para el servicio especificado',
            'state' => 'activo',
            'service_id' => 3,
        ]);
    }
}
