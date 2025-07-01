<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pedido_productos')->insert([
            [
                'Cantidad' => 1,
                'Descuento' => 0.00,
                'Subtotal' => 120.50,
                'Impuestos' => 21.70,
                'Precio_Unitario' => 120.50,
                'Id_Pedido' => 1,
                'Id_Producto' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Cantidad' => 1,
                'Descuento' => 0.00,
                'Subtotal' => 299.99,
                'Impuestos' => 50.30,
                'Precio_Unitario' => 299.99,
                'Id_Pedido' => 1,
                'Id_Producto' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
