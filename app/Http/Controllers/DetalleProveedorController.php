<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleProveedor;

class DetalleProveedorController extends Controller
{

 //
     
 public function getData(Request $request){
    $rta = 10 + 20;
    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'result' => $rta
    ]);
}
public function save (Request $request){

    try{ 

        $detalle= new DetalleProveedor();
        $detalle->Producto= $request->Producto;
        $detalle->Valor_Factura= $request->ValorFactura;
        $detalle->Detalle_Producto= $request->DetalleProducto;
        $detalle->id_Proveedor= $request->idProveedor;
        $detalle->save();



    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'data' => $request ->$detalle,
    ]);
}
catch(\Exception $e){
    echo $e->getMessage();
}

}


public function update (Request $request){
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
