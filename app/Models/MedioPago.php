<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedioPago extends Model
{
    use HasFactory;
    protected $table = 'medio__pagos';
    protected $fillable=['Medio_Pago','Valor_Total_Pagar','id_orden','id_Cliente'];
}
