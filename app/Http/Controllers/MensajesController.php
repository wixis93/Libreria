<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//importar el modelo
use App\Mensaje;

class MensajesController extends Controller
{
    public function store(Request $request)
    {
        $mensaje = new Mensaje;
        //$mensaje = Mensaje::create($request->all());  
        //return "OK"; 
 
       /* if ($mensaje) {
             $request->session()->flash('created',true);
             return redirect('/contacto');
         } */
    	$mensaje = \DB::table('mensaje')->insert([
    			'nombre' => $request->nombre,
    			'correo' => $request->correo,
    			'mensaje' => $request->mensaje,
    			'created_at'=>DATE('Y-m-d H:i:s'),
    			'updated_at'=>DATE('Y-m-d H:i:s')
    		]);
        return view('website.index');

        /*
        $mensaje->nombre = $request->nombre;
        $mensaje->correo = $request->correo;
        $mensaje->mensaje = $request->mensaje;   

        $mensaje->save();
        
        */

    }
}
