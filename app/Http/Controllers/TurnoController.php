<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno;

class TurnoController extends Controller
{

 //
     
 public function getData(Request $request){
    $turno=Turno::all();
    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'result' => $turno
    ]);
}
public function save (Request $request){

    try{ 

        $turnos= new Turno();
        $turnos->id_Empleado= $request->idEmpleado;
        $turnos->Tipo_Jornada= $request->TipoJornada;
        $turnos->Horario= $request->Horario;
        $turnos->save();


    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
        'data' => $request -> $Turnos,
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
