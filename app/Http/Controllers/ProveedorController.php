<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{



     //
     
   public function getData(Request $request){
    $proveedor=Proveedor::all();
    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'result' => $proveedor
    ]);
}
public function save (Request $request){


    try{ 

       $proveedor= new Proveedor();
       $proveedor->nombre_Proveedor= $request->nombre_Proveedor;
       $proveedor->id_Producto= $request->id_Producto;
       $proveedor->Cantidad= $request->Cantidad;
       $proveedor->Valor_Proveedor= $request->Valor_Proveedor;
       $proveedor->Numero_pedido= $request->Numero_pedido;
       $proveedor->Direccion= $request->Direccion;
       $proveedor->Telefono_Fijo= $request->Telefono_Fijo;
       $proveedor->N_celular= $request->N_Celular;
       $proveedor->Correo_Electronico= $request->Correo_Electronico;
       $proveedor->Cuidad= $request->Cuidad;
       $proveedor->save();

    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'data' => $request -> $proveedor,
    ]);

}
catch(\Exception $e){
    echo $e->getMessage();
}
}
public function update (Request $request){

    $proveedor=Proveedor::findOrFail($request->id);

    $proveedor-> update([
    'Nombre_Proveedor'=>$request->NombreProveedor,
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
