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
        Schema::table('pedidos', function (Blueprint $table) {
            if (!Schema::hasColumn('pedidos', 'Direccion_Envio')) {
                $table->string('Direccion_Envio', 255)->nullable();
            }
            if (Schema::hasColumn('pedidos', 'Dirección_Envio')) {
                $table->dropColumn('Dirección_Envio');
            }
            if (Schema::hasColumn('pedidos', 'Direcci�n_Envio')) {
                $table->dropColumn('Direcci�n_Envio');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedidos', function (Blueprint $table) {
            if (!Schema::hasColumn('pedidos', 'Dirección_Envio')) {
                $table->string('Dirección_Envio', 255)->nullable();
            }
            if (Schema::hasColumn('pedidos', 'Direccion_Envio')) {
                $table->dropColumn('Direccion_Envio');
            }
        });
    }
};
