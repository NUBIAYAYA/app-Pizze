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
        Schema::create('orden__empleados', function (Blueprint $table) {
            $table->unsignedBigInteger('id_empleado');
            $table->foreign('id_empleado')->references ('id')->on ('empleados');

            $table->unsignedBigInteger('id_Orden');
            $table->foreign('id_Orden')->references ('id')->on ('pedidos');

            $table->unsignedBigInteger('id_Producto');
            $table->foreign('id_Producto')->references ('id')->on ('producto_bodegas');
            
            $table->integer('Tiempo_Entrega');
            $table->string('Prioridad');

 




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden__empleados');
    }
};
