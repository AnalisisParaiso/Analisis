<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //Se elimina las columnas created_at y updated_at
    public $timestamps = false;

    /*En este caso las columnas que indicamos son las que no queremos que puedan ser cargadas de forma masiva*/
    protected $fillable = [
        'identityCard','name', 'lastname', 'age','address','position','rol','email','password'
    ];

    /*Permite que cuando se obtienen los datos mediante tinker este dato no sea
    mostrado, por motivos de seguridad, es muy util a la hora de usar APIS.*/
    protected $hidden = [
        'password'
    ];
}
