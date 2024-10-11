<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{


    
     //
     
     public function getData(Request $request){
    $empleado=Empleado::all();
    return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'result' => $empleado
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

        $empleado=Empleado::findOrFail($request->id);

        $empleado-> update([
        'Apellidos'=>$request->apellidos,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado correctamente',
          
         
        ]);
    }
    public function delete (Request $request){
        $empleados=Empleado::findOrFail($request->id);
        $empleados->delete();
        return response()->json([
            'status' => '200',
            'message' => 'Se elimino correctamente..',
            'result' => $empleados
        ]);
    }


}
