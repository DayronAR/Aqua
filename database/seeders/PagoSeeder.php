<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pagos')->insert([
            [
                'id_pago' => 'PG001',
                'Total' => 420.49,
                'Metodo_pago' => 'Tarjeta',
                'Estado_Pago' => 'Completado',
                'Transaccion_ID' => 'TX123456',
                'Fecha_Pago' => now(),
                'Tarjeta_UltimosDigitos' => '1234',
                'Modalidad_pago' => 'Online',
                'Id_Pedido' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
