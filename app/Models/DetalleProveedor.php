<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleProveedor extends Model
{
    use HasFactory;
    protected $table = 'detalle_Proveedors';
    protected $fillable=['Producto','Valor_Factura','Detalle_Producto','id_Proveedor'];
}
