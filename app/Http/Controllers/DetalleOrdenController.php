<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalleorden;

class DetalleOrdenController extends Controller
{

    //
     
    public function getData(Request $request){

        $detalleorden=Detalleorden::all();
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'result' => $detalleorden
        ]);
    }
    public function save (Request $request){

        try{ 

            $detalleOrden= new Detalleorden();
            $detalleOrden->id_Orden= $request->idOrden;
            $detalleOrden->Producto= $request->nombreProducto;
            $detalleOrden->id_Identificacion= $request->CC;
            $detalleOrden->Mesa= $request->Mesa;
            $detalleOrden->Medio_Pago= $request->MedioPago;
            $detalleOrden->save();



        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $request -> $detalleOrden,
        ]);


    }
    catch(\Exception $e){
        echo $e->getMessage();
    }
    }


    public function update (Request $request){

        $detalleOrden=Detalleorden::findOrFail($request->id_Orden);

        $detalleOrden-> update([
        'Mesa'=>$request->Mesa,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado correctamente',
          
         
        ]);
    }
    public function delete (Request $request){
        $detalleOrden=Detalleorden::findOrFail($request->id);
        $detalleOrden->delete();
        return response()->json([
            'status' => '200',
            'message' => 'Se elimino correctamente..',
            'result' => $detalleOrden
            
        ]);
    }


}
