<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedioPago;

class MedioPagoController extends Controller
{

//
     
public function getData(Request $request){
    $medioPago=MedioPago::all();
    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'result' => $medioPago
    ]);
}
public function save (Request $request){
    try{ 

        $mediopago= new MedioPago();
        $mediopago->Medio_Pago= $request->MedioPago;
        $mediopago->Valor_Total_Pagar= $request->ValorTotalPagar;
        $mediopago->id_orden= $request->idorden;
        $mediopago->id_Cliente= $request->idcliente;
        $mediopago->save();


    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'data' => $request ->mediopago,
    ]);
}
catch(\Exception $e){
    echo $e->getMessage();
}

}


public function update (Request $request){


    $mediopago=MedioPago::findOrFail($request->id);

    $mediopago-> update([
    'Medio_Pago'=>$request->mediopago,
    ]);

    return response()->json([
        'status' => '200',
        'message' => 'actualizado correctamente',
      
     
    ]);
}
public function delete (Request $request){
    $mediopago=MedioPago::findOrFail($request->id);
    $mediopago->delete();
    return response()->json([
        'status' => '200',
        'message' => 'Se elimino correctamente..',
        'result' => $mediopago
    ]);
}





}
