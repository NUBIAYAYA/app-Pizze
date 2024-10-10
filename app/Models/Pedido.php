<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';
    protected $fillable=['Fecha','Estado_Pedido','Precio_Unitario','Cantidad','Descripcion','Valor_Total_Pagar','Tipo_Solicitud','Metodo_Pago','id_identificacion'];
}
