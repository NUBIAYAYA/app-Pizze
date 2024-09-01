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
        Schema::create('producto__bodegas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Producto');
            $table->integer('Cantidad');
            $table->integer('Valor_Unitario_Proveedor');
            $table->string('Descripcion');
            $table->integer('Valor_Total_Proveedor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto__bodegas');
    }
};
