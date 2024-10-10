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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Direccion');
            $table->integer('cedula');
            $table->integer('Telefono_Fijo');
            $table->integer('N_Celular');
            $table->string('Barrio');
            $table->string('Correo_Electronico');
    




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
