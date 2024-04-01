<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $table = 'productos'; // se especifica la tabla que va a utilizar.
    protected $primaryKey='producto_id';//se indica el nombre de la clave primaria.
}
