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
        Schema::create('medio__pagos', function (Blueprint $table) {
            $table->id();
            $table->string('Medio_Pago');
            $table->integer('Valor_Total_Pagar');
           // $table->unsignedBigInteger('user_id');
$table->unsignedBigInteger('id_orden');
 
// $table->foreign('user_id')->references('id')->on('users');
 $table->foreign('id_orden')->references ('id')->on ('pedidos');
 
                     // $table->unsignedBigInteger('user_id');
$table->unsignedBigInteger('id_Cliente');
 
// $table->foreign('user_id')->references('id')->on('users');
 $table->foreign('id_Cliente')->references ('id')->on ('clientes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medio__pagos');
    }
};
