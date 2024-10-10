<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
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

            $empleados= new Empleado();
            $empleados->Nombre= $request->nombre;
            $empleados->Apellidos= $request->apellidos;
            $empleados->CC= $request->CC;
            $empleados->Telefono= $request->Telefono;
            $empleados->Direccion= $request->Direccion;
            $empleados->Correo_Electronico= $request->Correo_Electronico;
            $empleados->Cargo= $request->Cargo;
            $empleados->Salario= $request->Salario;
            $empleados->Base_Dinero= $request->Base_Dinero;
            $empleados->save();


        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $request ->  $empleados,
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
