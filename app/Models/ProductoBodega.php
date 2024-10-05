<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoBodega extends Model
{
    use HasFactory;
    protected $table = 'producto_bodegas';
    protected $fillable=['nombre_Producto','Cantidad','Valor_Unitario_Proveedor','Descripcion','Valor_Total_Proveedor'];
}
