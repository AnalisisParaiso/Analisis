<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //Se elimina las columnas created_at y updated_at
    public $timestamps = false;

    /*Esta propiedad permite indicarle a Laravel los atributos que podran ser
    cargados en la bd de forma masiva, por ejemplo si el usuario ingresa un ID, dicho id no
    sera tomado en cuenta, por que se uso esta propiedad, ya que el id es
    autoincremental y no debe ser cargado de por medio de una violación del
    html en un form o por url*/
    protected $fillable = [
        'date','hour'
    ];
}
