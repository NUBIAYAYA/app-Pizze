<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'Proveedores';
    //    public $timestamps = false;
    protected $fillable=['nombre_Proveedor','Cantidad','Valor_Proveedor','Numero_pedido', 'Direccion', 'Telefono_Fijo','N_Celular','Correo_Electronico','Cuidad','id_Producto'];
}
