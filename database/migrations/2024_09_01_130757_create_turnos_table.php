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
        Schema::create('turnos', function (Blueprint $table) {
$table->id();
// $table->unsignedBigInteger('user_id');
$table->unsignedBigInteger('id_Empleado');
 
// $table->foreign('user_id')->references('id')->on('users');
 $table->foreign('id_Empleado')->references ('id')->on ('empleados');
            
            $table->string('Tipo_Jornada');
            $table->string('Horario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos');
    }
};
