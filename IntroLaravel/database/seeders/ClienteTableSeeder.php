<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Sebastian',
                'apellido' => 'Ramírez',
                'correo' => 'sebas@gmail.com',
                'telefono' => '1234567890'
            ],
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'correo' => 'juan@gmail.com',
                'telefono' => '0987654321'
            ],
            [
                'nombre' => 'María',
                'apellido' => 'Gómez',
                'correo' => 'maria@gmail.com',
                'telefono' => '1230984567'
            ]
        ]);
    }
}
