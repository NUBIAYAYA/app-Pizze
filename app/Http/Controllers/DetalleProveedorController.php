<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleProveedor;

class DetalleProveedorController extends Controller
{

 //
     
 public function getData(Request $request){

    $deetalleProveedor=DetalleProveedor::all();
     return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'result' => $deetalleProveedor
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

    $detalle=DetalleProveedor::findOrFail($request->id_Proveedor);

    $detalle-> update([
    'Valor_Factura'=>$request->ValorFactura,
    ]);


    return response()->json([
        'status' => '200',
        'message' => 'actualizado correctamente',
      
     
    ]);
}
public function delete (Request $request){
    $detalle=DetalleProveedor::findOrFail($request->id);
    $detalle->delete();
    return response()->json([
        'status' => '200',
        'message' => 'Se elimino correctamente..',
        'result' => $detalle
    ]);
}




}
