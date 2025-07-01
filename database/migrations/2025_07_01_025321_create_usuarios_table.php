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
        Schema::create('usuarios', function (Blueprint $table) {
        $table->id('id_usuario');
        $table->unsignedBigInteger('ID_cliente');
        $table->string('rol', 30);
        $table->string('Password', 255);
        $table->string('usuario');
        $table->timestamps();

        $table->foreign('ID_cliente')->references('ID_cliente')->on('clientes');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
