<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;


class ClienteController extends Controller  
{
    //
     
    public function getData(Request $request){

        $cliente=Cliente::all();
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'result' => $cliente
        ]);
    }
    public function save (Request $request){

        try{ 

            $cliente= new Cliente();
            $cliente->Nombre= $request->nombre;
            $cliente->Apellidos= $request->apellidos;
            $cliente->Direccion= $request->direccion;
            $cliente->Cedula= $request->Cedula;
            $cliente->Telefono_Fijo= $request->TelefonoFijo;
            $cliente->N_Celular= $request->celular;
            $cliente->Barrio= $request->barrio;
            $cliente->Correo_Electronico= $request->CorreoElectronico;
            $cliente->save();




        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $request ->$cliente,
        ]);
    }
    catch(\Exception $e){
        echo $e->getMessage();
    }


    }


    public function update (Request $request){

    $cliente=Cliente::findOrFail($request->id);

    $cliente-> update([
    'Apellidos'=>$request->Apellidos,
    ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado correctamente',
          
         
        ]);
    }
    public function delete (Request $request){
        $cliente=Cliente::findOrFail($request->id);
        $cliente->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Se elimino correctamente..',
            'result' => $cliente
        ]);
    }

}



