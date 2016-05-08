<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class editorial extends Model
{
    protected $table = 'editorial';
    protected $primaryKey="id_editorial";
    protected $fillable = ['nombre','telefono'];
    public $timestamps = false;
}
