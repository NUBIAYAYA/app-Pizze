<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleorden extends Model
{
    use HasFactory;
    protected $table = 'detalle_ordens';
    protected $fillable=['id_Orden','Producto','id_Identificacion','Mesa','Medio_Pago'];

}
