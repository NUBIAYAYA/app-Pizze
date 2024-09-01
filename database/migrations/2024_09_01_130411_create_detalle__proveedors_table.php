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
        Schema::create('detalle__proveedors', function (Blueprint $table) {
            
            $table->string('Producto');
            $table->integer('Valor_Factura');
            $table->string('Detalle_Producto');

            // $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('id_Proveedor');
 
        // $table->foreign('user_id')->references('id')->on('users');
    $table->foreign('id_Proveedor')->references ('id')->on ('proveedors');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle__proveedors');
    }
};
