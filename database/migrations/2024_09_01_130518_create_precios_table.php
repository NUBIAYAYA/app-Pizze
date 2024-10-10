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
        Schema::create('precios', function (Blueprint $table) {
            $table->integer('Precio_Unitario');
            $table->integer('Cantidad');
            $table->timestamps();
   // $table->unsignedBigInteger('user_id');
   $table->unsignedBigInteger('id_Producto');
 
   // $table->foreign('user_id')->references('id')->on('users');
    $table->foreign('id_Producto')->references ('id')->on ('producto_bodegas');


       // $table->unsignedBigInteger('user_id');
   $table->unsignedBigInteger('id_Proveedor');
 
   // $table->foreign('user_id')->references('id')->on('users');
    $table->foreign('id_Proveedor')->references ('id')->on ('proveedores');






        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('precios');
    }
};
