<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{

   //
     
   public function getData(Request $request){
    $pedido=Pedido::all();
    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'result' => $pedido
    ]);
}
public function save (Request $request){

    try{ 

        $pedido= new Pedido();
        $pedido->Fecha= $request->Fecha;
        $pedido->Estado_Pedido= $request->EstadoPedido;
        $pedido->Precio_Unitario= $request->PrecioUnitario;
        $pedido->Cantidad= $request->Cantidad;
        $pedido->Descripcion= $request->Descripcion;
        $pedido->Valor_Total_Pagar= $request->ValorTotalPagar;
        $pedido->Tipo_Solicitud= $request->TipoSolicitud;
        $pedido->Metodo_Pago= $request->MetodoPago;
        $pedido->id_identificacion= $request->identificacion;
        $pedido->save();

    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'data' => $request -> $pedido,
    ]);

}
catch(\Exception $e){
    echo $e->getMessage();
}

}


public function update (Request $request){

    $pedido=Pedido::findOrFail($request->id);

    $pedido-> update([
    'Estado_Pedido'=>$request->EstadoPedido,
    ]);

    return response()->json([
        'status' => '200',
        'message' => 'actualizado correctamente',
      
     
    ]);
}
public function delete (Request $request){
    $rta = 10 + 20;
    return response()->json([
        'status' => '200',
        'message' => 'Se elimino correctamente..',
        'result' => $rta
    ]);
}




}
