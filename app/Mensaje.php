<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{   
	//indicas la tabla con la que trabajaras
    protected $table="mensaje";
    //indicas cual es tu llave primaria en la tabla
    protected $primaryKey="id_mensaje";
    //seleccionar los datos que quieres insertar
    protected $filable=['nombre','email','mensaje'];

}
