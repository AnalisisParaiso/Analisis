<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //Se elimina las columnas created_at y updated_at
    public $timestamps = false;

    /*En este caso las columnas que indicamos son las que no queremos que puedan ser cargadas de forma masiva*/
    protected $fillable = [
        'description'
    ];
}
