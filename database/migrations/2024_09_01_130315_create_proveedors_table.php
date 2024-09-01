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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Proveedor');
            $table->integer('Cantidad');
            $table->integer('Valor_Proveedor');
            $table->integer('Numero_Pedido');
            $table->string('Direccion');
            $table->integer('Telefono_Fijo');
            $table->integer('N_Celular');
            $table->string('Correo_Electronico');
            $table->string('Cuidad');

        // $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('id_Producto');
 
            // $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('id_Producto')->references ('id')->on ('producto__bodegas');    
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
