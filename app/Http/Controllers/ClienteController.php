<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;


class ClienteController extends Controller  
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

            $cliente= new Cliente();
            $cliente->Nombre= $request->nombre;
            $cliente->Apellidos= $request->apellidos;
            $cliente->Direccion= $request->direccion;
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



