<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ambientesController extends Controller
{
    public function index()
    {
    	return "Deberia apareser este mensaje si todo sale bien";
    }

    public function show(Request $request)
    {
    	return $request->all();
    	//return $request->nombre;
    	//return $request->email;
    }

    public function store(Request $request)
    {
    	//return $request->all();
        //encriptar contraseña
        $contrasena = \Hash::make($request->password);
    	$usuario = \DB::table('usuario')->insert([
    			'nombre' => $request->nombre,
    			'nick' => $request->nick,
    			'email' => $request->email,
    			'password' => $contrasena,
    			'telefono' => $request->telefono,
                'tipo' => 1
    		]);
    	return view('website.regusr');
    }
}
