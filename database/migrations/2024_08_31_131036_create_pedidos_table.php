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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Fecha');
            $table->string('Estado_Pedido');
            $table->integer('Precio_Unitario');
            $table->integer('Cantidad');
            $table->string('Descripcion');
            $table->integer('Valor_Total_Pagar');
            $table->integer('Tipo_Solicitud');
            $table->string('Metodo_Pago');

            // $table->unsignedBigInteger('user_id');
$table->unsignedBigInteger('id_identificacion');
 
// $table->foreign('user_id')->references('id')->on('users');
 $table->foreign('id_identificacion')->references ('id')->on ('clientes');






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
