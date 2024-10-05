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

       try{ 

         $productobodega= new ProductoBodega();
        $productobodega->Nombre_Producto= $request->nombreProducto;
        $productobodega->Cantidad= $request->Cantidad;
        $productobodega->Valor_Unitario_Proveedor= $request->ValorUnitarioProveedor;
        $productobodega->Descripcion= $request->Descripcion;
        $productobodega->Valor_Total_Proveedor= $request->ValorTotalProveedor;
        $productobodega->save();


        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $productobodega,
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
 