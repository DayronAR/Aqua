<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('productos')->insert([
            [
                'nombre' => 'Filtro portátil',
                'Stock' => 10,
                'descripcion' => 'Ideal para llevar de viaje.',
                'capacidad' => '1L',
                'tecnologia' => 'Ozono UV',
                'imagen' => 'filtro1.jpg',
                'vida_util' => '6 meses',
                'precio' => 120.50,
                'ID_Categoria' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Filtro doméstico',
                'Stock' => 5,
                'descripcion' => 'Para toda la familia.',
                'capacidad' => '10L',
                'tecnologia' => 'Ozono + Carbón activado',
                'imagen' => 'filtro2.jpg',
                'vida_util' => '1 año',
                'precio' => 299.99,
                'ID_Categoria' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'FZ-100',
                'Stock' => 8,
                'descripcion' => 'Ideal para uso familiar, elimina bacterias y metales pesados.',
                'capacidad' => '8L',
                'tecnologia' => 'Ozono',
                'imagen' => 'fz100.jpg',
                'vida_util' => '1 año',
                'precio' => 250.00,
                'ID_Categoria' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'FZ-200',
                'Stock' => 6,
                'descripcion' => 'Para cocina, incluye grifo de acero y sistema de doble filtrado.',
                'capacidad' => '5L',
                'tecnologia' => 'Ozono + Carbón',
                'imagen' => 'fz200.jpg',
                'vida_util' => '1 año',
                'precio' => 380.00,
                'ID_Categoria' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'FZ-300',
                'Stock' => 4,
                'descripcion' => 'Perfecto para oficinas, fácil instalación y mantenimiento.',
                'capacidad' => '12L',
                'tecnologia' => 'Ozono',
                'imagen' => 'fz300.jpg',
                'vida_util' => '1 año',
                'precio' => 470.00,
                'ID_Categoria' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'FZ-400',
                'Sock' => 3,
                'descripcion' => 'Sistema de triple filtración: sedimentos, carbón y ozono.',
                'capacidad' => '15L',
                'tecnologia' => 'Ozono + Carbón + Sedimentos',
                'imagen' => 'fz400.jpg',
                'vida_util' => '2 años',
                'precio' => 550.00,
                'ID_Categoria' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'FZ-R01',
                'Stock' => 20,
                'descripcion' => 'Repuesto compatible con todos los modelos. Duración: 6 meses.',
                'capacidad' => 'N/A',
                'tecnologia' => 'Cartucho',
                'imagen' => 'fzr01.jpg',
                'vida_util' => '6 meses',
                'precio' => 80.00,
                'ID_Categoria' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'FZ-M01',
                'Stock' => 50,
                'descripcion' => 'Servicio de limpieza y revisión técnica del filtro a domicilio.',
                'capacidad' => 'N/A',
                'tecnologia' => 'Mantenimiento',
                'imagen' => 'fzm01.jpg',
                'vida_util' => 'N/A',
                'precio' => 60.00,
                'ID_Categoria' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
