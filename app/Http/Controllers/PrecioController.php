<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Precio;


class PrecioController extends Controller
{

 //
     
 public function getData(Request $request){
    $precio=Precio::all();
    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'result' => $precio
    ]);
}
public function save (Request $request){
    try{ 

        $precio= new Precio();
        $precio->Precio_Unitario= $request->PrecioUnitario;
        $precio->Cantidad= $request->Cantidad;
        $precio->id_Producto= $request->idProducto;
        $precio->id_Proveedor= $request->idProveedor;
        $precio->save();


    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'data' => $request ->precio,
    ]);
}
catch(\Exception $e){
    echo $e->getMessage();
}


}


public function update (Request $request){

    $precio=Precio::findOrFail($request->id_Producto);

    $precio-> update([
    'Cantidad'=>$request->Cantidad,
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
