<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    use HasFactory;
    protected $table = 'precios';
    protected $fillable=['id','Precio_Unitario','Cantidad','id_Producto','id_Proveedor'];


}
