<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
     protected $table='autor';
     protected $primaryKey="idAutor";
     protected $fillable = ['nombre'];
     public $timestamps=false;
}
