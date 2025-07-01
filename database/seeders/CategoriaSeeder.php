<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categorias')->insert([
            [
                'Nombre' => 'Filtros pequeños',
                'Descripción' => 'Uso personal',
                'Imagen_Icono' => 'icon1.png',
                'Color_Codigo' => '#00aaff',
                'Estado' => 'activo',
                'Fecha_Creacion' => now(),
                'Fecha_Actualizacion' => now(),
                'Orden_Visualizacion' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nombre' => 'Filtros familiares',
                'Descripción' => 'Para hogares',
                'Imagen_Icono' => 'icon2.png',
                'Color_Codigo' => '#ffaa00',
                'Estado' => 'activo',
                'Fecha_Creacion' => now(),
                'Fecha_Actualizacion' => now(),
                'Orden_Visualizacion' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
