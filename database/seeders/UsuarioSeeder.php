<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('usuarios')->insert([
            [
                'ID_cliente' => 1,
                'rol' => 'admin',
                'Password' => Hash::make('admin123'),
                'usuario' => 'admin',
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'correo' => 'juan.perez@example.com',
                'telefono' => '900000001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_cliente' => 2,
                'rol' => 'cliente',
                'Password' => Hash::make('cliente123'),
                'usuario' => 'cliente1',
                'nombre' => 'Ana',
                'apellido' => 'Gómez',
                'correo' => 'ana.gomez@example.com',
                'telefono' => '900000002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_cliente' => 3,
                'rol' => 'vendedor',
                'Password' => Hash::make('vendedor123'),
                'usuario' => 'vendedor1',
                'nombre' => 'Carlos',
                'apellido' => 'Ramírez',
                'correo' => 'carlos.ramirez@example.com',
                'telefono' => '987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_cliente' => 4,
                'rol' => 'cliente',
                'Password' => Hash::make('cliente456'),
                'usuario' => 'cliente2',
                'nombre' => 'Lucía',
                'apellido' => 'Fernández',
                'correo' => 'lucia.fernandez@example.com',
                'telefono' => '912345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
