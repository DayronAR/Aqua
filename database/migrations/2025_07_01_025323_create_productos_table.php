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
        Schema::create('productos', function (Blueprint $table) {
        $table->id('ID_Producto');
        $table->string('nombre', 100);
        $table->integer('Stock');
        $table->text('descripcion');
        $table->string('capacidad');
        $table->string('tecnologia', 100);
        $table->string('imagen', 255)->nullable();
        $table->string('vida_util', 50);
        $table->decimal('precio', 10, 2);
        $table->unsignedBigInteger('ID_Categoria');
        $table->timestamps();

        $table->foreign('ID_Categoria')->references('ID_Categoria')->on('categorias');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
