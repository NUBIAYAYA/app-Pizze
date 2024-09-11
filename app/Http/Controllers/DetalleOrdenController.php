<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleOrdenController extends Controller
{

    public function getData(Request $request){
        $rta= 10+20;
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'result'=> $rta
        ]);

    }



}
