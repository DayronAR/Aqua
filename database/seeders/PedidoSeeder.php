<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pedidos')->insert([
            [
                'Fecha' => now(),
                'Total' => 420.49,
                'Estado_Envio' => 'pendiente',
                'Fecha_Entrega_Estimada' => now()->addDays(3),
                'Direccion_Envio' => 'Jr. Los Andes 123',
                'Ciudad_Envio' => 'Juliaca',
                'Codigo_Postal' => '21101',
                'Telefono_Contacto' => '923456789',
                'ID_cliente' => 1,
                'Observaciones' => 'Entregar antes de las 6pm',
                'Metodo_Pago' => 'Tarjeta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Fecha' => now()->subDays(2),
                'Total' => 199.99,
                'Estado_Envio' => 'enviado',
                'Fecha_Entrega_Estimada' => now()->addDays(1),
                'Direccion_Envio' => 'Av. Lima 456',
                'Ciudad_Envio' => 'Puno',
                'Codigo_Postal' => '21001',
                'Telefono_Contacto' => '987654321',
                'ID_cliente' => 2,
                'Observaciones' => 'Llamar antes de entregar',
                'Metodo_Pago' => 'Efectivo',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(1),
            ],
            [
                'Fecha' => now()->subDays(5),
                'Total' => 350.00,
                'Estado_Envio' => 'entregado',
                'Fecha_Entrega_Estimada' => now()->subDays(2),
                'Direccion_Envio' => 'Calle Central 789',
                'Ciudad_Envio' => 'Arequipa',
                'Codigo_Postal' => '04001',
                'Telefono_Contacto' => '912345678',
                'ID_cliente' => 3,
                'Observaciones' => 'Dejar en portería',
                'Metodo_Pago' => 'Yape',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(2),
            ],
        ]);
    }
}
