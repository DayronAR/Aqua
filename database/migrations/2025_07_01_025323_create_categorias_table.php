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
        Schema::create('categorias', function (Blueprint $table) {
        $table->id('ID_Categoria');
        $table->string('Nombre', 100);
        $table->text('Descripción');
        $table->string('Imagen_Icono', 255);
        $table->string('Color_Codigo', 7);
        $table->string('Estado', 20);
        $table->timestamp('Fecha_Creacion');
        $table->timestamp('Fecha_Actualizacion');
        $table->integer('Orden_Visualizacion');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
