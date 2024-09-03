<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
     
    public function GetData(Request $request){
        $rta= 10+20;
        return response()-> json ([
            'status '=> '200',
            'message'=> 'Data..',
            'respuesta'=> $rta
    
        ]);

    }



public function save(Request $request){
    return response()-> json ([
        'status '=> '200',
        'message'=> 'guardado con exito'

    ]);
}

public function update(Request $request){
    return response()-> json ([
        'status '=> '200',
        'message'=> 'cambio con exito'

    ]);
}

public function Delete(Request $request){
    return response()-> json ([
        'status '=> '200',
        'message'=> 'Elimino con  exito'

    ]);
}


}




