<?php

namespace App\Http\Controllers;


use App\Htpp\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller  
{
    //
     
    public function getData(Request $request){
        $rta= 10+20;
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'result'=> $rta
        ]);

    }





}




