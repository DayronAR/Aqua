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
        Schema::create('pagos', function (Blueprint $table) {
        $table->string('id_pago')->primary();
        $table->decimal('Total', 10, 2);
        $table->string('Metodo_pago', 50);
        $table->string('Estado_Pago', 30);
        $table->string('Transaccion_ID', 100);
        $table->timestamp('Fecha_Pago');
        $table->string('Tarjeta_UltimosDigitos', 4);
        $table->string('Modalidad_pago', 20);
        $table->unsignedBigInteger('Id_Pedido');
        $table->timestamps();

        $table->foreign('Id_Pedido')->references('Id_Pedido')->on('pedidos');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
