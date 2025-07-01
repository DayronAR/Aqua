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
        Schema::create('contactos', function (Blueprint $table) {
        $table->id('Id_Contacto');
        $table->unsignedBigInteger('usuario_id_usuario');
        $table->string('Nombre', 100);
        $table->string('Correo', 100);
        $table->text('Mensaje');
        $table->timestamp('Fecha');
        $table->timestamps();

        $table->foreign('usuario_id_usuario')->references('id_usuario')->on('usuarios');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
