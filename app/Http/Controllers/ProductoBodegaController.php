<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductoBodega;

class ProductoBodegaController extends Controller

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
       $ProductoBodega=new ProductoBodega();
       $ProductoBodega->name= $request->name;
       $ProductoBodega->Save();

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $request -> nombre,
        ]);
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
 