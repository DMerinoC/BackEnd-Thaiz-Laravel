<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Pablo Arconte',
            'nickname' => 'dmerino',
            'password' => Hash::make('123456'),
            'state' => 'activo',
            'email' => 'dmerino@gmail.com',
            'user_type_id' => 1
        ]);
        User::create([
            'id' => 2,
            'name' => 'Thaiz Spa',
            'nickname' => 'thaiz3',
            'password' => Hash::make('123456'),
            'state' => 'activo',
            'email' => 'thaiz3@gmail.com',
            'user_type_id' => 3
        ]);
        User::create([
            'id' => 3,
            'name' => 'Camila Arconte',
            'nickname' => 'camila2',
            'password' => Hash::make('123456'),
            'state' => 'activo',
            'email' => 'camila2@gmail.com',
            'user_type_id' => 2
        ]);
        User::create([
            'id' => 4,
            'name' => 'Peptido Arcaico',
            'nickname' => 'peptido4',
            'password' => Hash::make('123456'),
            'state' => 'activo',
            'email' => 'peptido4@gmail.com',
            'user_type_id' => 2
        ]);
        User::create([
            'id' => 5,
            'name' => 'Lum Noch',
            'nickname' => 'lum5',
            'password' => Hash::make('123456'),
            'state' => 'activo',
            'email' => 'lum5@gmail.com',
            'user_type_id' => 2
        ]);
    }
}
