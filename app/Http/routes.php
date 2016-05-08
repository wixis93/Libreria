<?php


get('/', function () {
    
    return view('website.index');
    //return "usando git";
});

post('/form', 'ambientesController@store');

//controladores
get('/controler', 'ambientesController@index');

//rutas de vistas
get('/tienda', function(){
	return view('website.tienda');
});
get('/carrito', function(){
	return view('website.carrito');
});
/*get('/ingresar', function(){
	return view('website.ingresar');
});*/


get('/acerca', function(){
	return view('website.acerca');
});
get('/contacto', function(){
	return view('website.contacto');
});
get('/nuevousr', function(){
	return view('website.nuevousr');
});

get('/ingresar', 'LoginController@index');
post('/mensajes', 'MensajesController@store');
post('/login', 'LoginController@store');



Route::group(['middleware' => 'admin'], function(){
	get('/admin/panel', 'AdminController@index');
	get('/logout', 'AdminController@logout');
	Route::resource('admin/libros','LibrosController');
	
	get('/administrador/libros/create/idiomas', 'LibrosController@idiomas');
	post('/administrador/libros/create/storeIdioma', 'LibrosController@storeIdioma');
	post('/administrador/libros/create/deleteIdioma', 'LibrosController@deleteIdioma');

	get('/administrador/libros/create/editoriales', 'LibrosController@editoriales');
	post('/administrador/libros/create/storeEditorial', 'LibrosController@storeEditorial');
	post('/administrador/libros/create/deleteEditorial', 'LibrosController@deleteEditorial');
	
	get('/administrador/libros/create/autores', 'LibrosController@autores');
	post('/administrador/libros/create/storeAutor', 'LibrosController@storeAutor');
	post('/administrador/libros/create/deleteAutor', 'LibrosController@deleteAutor');
});

 post('/administrador/libros/autor','autorController@store');
 
 post('/administrador/libros/editorial',function(){
	return App\editorial::create(Request::all());
});
post('/administrador/libros/idioma',function(){
	return App\idioma::create(Request::all());
});

/*get('/consulta', function(){

	try{
		\DB::beginTransaction();
	// Eloquent
		$libro = new App\Libro;
			$libro->titulo = 'El alquimista';
			$libro->edicion = 'Segunda';
			$libro->paginas = 350;
			$libro->precio = 180.5;
			$libro->isbn = 'ABCDS';
			$libro->editorial_id_editorial = 1;
			$libro->Idioma_id_Idioma = 1;
			$libro->descuento = "";
			$libro->Imagen = 'imagen.jpg';
			$libro->save();

		$autor = new App\autor;
			$autor->Nombre = "Paulo Cohello";
			$autor->save();

		if(is_object($libro) && is_object($autor)) {
			$detalle = \DB::table('Autor_has_Libro')->insert([
				"Autor_idAutor" => $autor->id,
				"Libro_id_libro" => 15
			]);
		}
		\DB::commit();
		return "Exito";
	}  catch(Exception $ex) {
			\DB::rollback();
			return "Fail";
	}
 }); */


get('/users', function(){
	return App\User::all(); 
});

//consultas  multiples
