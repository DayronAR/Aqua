<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedido_productos', function (Blueprint $table) {
        $table->id('id_Pedido_producto');
        $table->integer('Cantidad');
        $table->decimal('Descuento', 10, 2);
        $table->decimal('Subtotal', 10, 2);
        $table->decimal('Impuestos', 10, 2);
        $table->decimal('Precio_Unitario', 10, 2);
        $table->unsignedBigInteger('Id_Pedido');
        $table->unsignedBigInteger('Id_Producto');
        $table->timestamps();

        $table->foreign('Id_Pedido')->references('Id_Pedido')->on('pedidos');
        $table->foreign('Id_Producto')->references('ID_Producto')->on('productos');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido__productos');
    }
};
