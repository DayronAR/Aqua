<?php
// Archivo renombrado para que la migración de clientes se ejecute antes que la de usuarios
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
        Schema::create('clientes', function (Blueprint $table) {
        $table->id('ID_cliente');
        $table->string('nombre', 100);
        $table->string('Dirección');
        $table->string('Tipo_Cliente', 20);
        $table->string('telefono', 20);
        $table->string('Correo', 100);
        $table->string('Toke_Recuperacion', 255);
        $table->string('Ruc_Dni', 20);
        $table->timestamp('Tokem_Expiracion');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
