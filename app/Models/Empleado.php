<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleados';
    protected $fillable=['Nombre','Apellidos','CC','Telefono','Direccion','Correo_Electronico','Cargo','Salario','Base_Dinero',];
}
