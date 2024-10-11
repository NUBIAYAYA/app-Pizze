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
        Schema::create('detalle_ordens', function (Blueprint $table) {
$table->id();
// $table->unsignedBigInteger('user_id');
$table->unsignedBigInteger('id_Orden');
 
// $table->foreign('user_id')->references('id')->on('users');
 $table->foreign('id_Orden')->references ('id')->on ('pedidos');
 $table->string('Producto');
 // $table->unsignedBigInteger('user_id');
$table->unsignedBigInteger('id_Identificacion');
 
// $table->foreign('user_id')->references('id')->on('users');
 $table->foreign('id_Identificacion')->references ('id')->on ('clientes');

 $table->integer('Mesa');
 $table->string('Medio_Pago');
$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ordens');
    }
};
