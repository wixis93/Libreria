<?php



Route::get('/', function () {
    
    return view('website.index');
    //return "usando git";
});

Route::post('/form', 'ambientesController@store');


//controladores
Route::get('/controler', 'ambientesController@index');

//rutas de vistas
Route::get('/tienda', function(){
	return view('website.tienda');
});


