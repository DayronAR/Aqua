<?php
// Archivo renombrado para que la migración de pedidos se ejecute antes que la de pagos
// ...existing code (igual al original)...
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
        Schema::create('pedidos', function (Blueprint $table) {
        $table->id('Id_Pedido');
        $table->timestamp('Fecha');
        $table->decimal('Total', 10, 2);
        $table->string('Estado_Envio', 50);
        $table->date('Fecha_Entrega_Estimada');
        $table->string('Direccion_Envio', 255);
        $table->string('Ciudad_Envio', 100);
        $table->string('Codigo_Postal', 20);
        $table->string('Telefono_Contacto', 20);
        $table->unsignedBigInteger('ID_cliente');
        $table->timestamps();

        $table->foreign('ID_cliente')->references('ID_cliente')->on('clientes');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
