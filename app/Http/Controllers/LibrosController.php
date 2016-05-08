<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\editorial;
use App\idioma;
use App\autor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LibrosController extends Controller
{
    
    public function index()
    {
        return view('admin.libros.index');
    }

    public function create(){
    	return view('admin.libros.create');
    }
    
    public function store(Requests $request){
    	 $file = $request->file('image'); 
        if ($request->hasFile('image')) {
            dd($file);
        }
        return back()->with('error-file', true);
    }

    public function idiomas(){

        return idioma::all();
    }
    public function editoriales(){

        return editorial::all();
    }
    public function autores(){

        return autor::all();
    }

    public function storeIdioma(Request $request){
            $this->validate($request, [
            'nombre' => 'required|min:3'
        ]);

        return Idioma::create($request->all());
    }
    public function storeEditorial(Request $request){
            $this->validate($request, [
            'nombre' => 'required|min:3',
            'telefono' => 'required|min:7'
        ]);

        return Editorial::create($request->all());
    }

    public function storeAutor(Request $request){
            $this->validate($request, [
            'nombre' => 'required|min:4'
        ]);

        return Autor::create($request->all());
    }

     public function deleteIdioma(Request $request)
    {   
        $delete = \DB::table('idioma')
            ->where('id_idioma', $request->input('id_Idioma'))
            ->delete();
            //->toSql();
        if($delete){
            return $delete;
        }
    }   

     public function deleteEditorial(Request $request)
    {   
        $delete = \DB::table('editorial')
            ->where('id_editorial', $request->input('id_Editorial'))
            ->delete();
        if($delete){
            return $delete;
        }
    }   

     public function deleteAutor(Request $request)
    {   
        $delete = \DB::table('autor')
            ->where('idAutor', $request->input('id_Autor'))
            ->delete();
            //->toSql();
        if($delete){
            return $delete;
        }
    }   
   
}

