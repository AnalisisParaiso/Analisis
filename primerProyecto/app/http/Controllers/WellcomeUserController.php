<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeUserController extends Controller
{
    /*Este método permite llamar a un objeto como si fuera una función, lo cual
    permite hacer una llamada de la clase sin especificar el método*/
    public function __invoke($name , $nickname = null)
    {
        //Tranforma la primera letra en mayuscula
        $name = ucfirst($name);

        if ($nickname != null) {
            return "Hola {$name}, {$nickname} desde controller";
        }else {
            return "Hola {$name} desde controller";
        }
    }
}
