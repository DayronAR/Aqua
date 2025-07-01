<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('contactos')->insert([
            [
                'usuario_id_usuario' => 1,
                'Nombre' => 'Cliente interesado',
                'Correo' => 'interesado@example.com',
                'Mensaje' => 'Quiero más información sobre los filtros',
                'Fecha' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
