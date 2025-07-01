<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('clientes')->insert([
            [
                'ID_cliente' => 1,
                'nombre' => 'Juan Pérez',
                'Dirección' => 'Av. Perú 123',
                'Tipo_Cliente' => 'Natural',
                'telefono' => '987654321',
                'Correo' => 'juan.perez@example.com',
                'Toke_Recuperacion' => 'ABC123',
                'Ruc_Dni' => '12345678',
                'Tokem_Expiracion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_cliente' => 2,
                'nombre' => 'Ana Gómez',
                'Dirección' => 'Calle Lima 456',
                'Tipo_Cliente' => 'Natural',
                'telefono' => '900000002',
                'Correo' => 'ana.gomez@example.com',
                'Toke_Recuperacion' => 'DEF456',
                'Ruc_Dni' => '87654321',
                'Tokem_Expiracion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_cliente' => 3,
                'nombre' => 'Carlos Ramírez',
                'Dirección' => 'Jr. Los Andes 789',
                'Tipo_Cliente' => 'Natural',
                'telefono' => '987654321',
                'Correo' => 'carlos.ramirez@example.com',
                'Toke_Recuperacion' => 'GHI789',
                'Ruc_Dni' => '11223344',
                'Tokem_Expiracion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_cliente' => 4,
                'nombre' => 'Lucía Fernández',
                'Dirección' => 'Av. Central 321',
                'Tipo_Cliente' => 'Natural',
                'telefono' => '912345678',
                'Correo' => 'lucia.fernandez@example.com',
                'Toke_Recuperacion' => 'JKL012',
                'Ruc_Dni' => '55667788',
                'Tokem_Expiracion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
