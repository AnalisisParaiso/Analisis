<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Recipe;


class RecipeController extends Controller
{
    public function store()
    {
        /*Formas de obtener datos de un formulario de laravel*/
        //request('name'),
        //request()->email,
        //request()->get('password')

        /*Al enviar datos mediante un form con el método POST los datos se capturan
        mediante el siguiente método*/
        $data = request()->all();

        /*$data = request()->validate([
            'name' =>'required', //reglas de validaciones "required, email, unique"
            'email' =>['required','email','unique:users,email'],//Nombre de la tabla: "users", columna asociada a la tabla: "email"
            'password' =>'required'
        ],[
            //Se envían los errores
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'email.email' => 'El campo email esta mal',//No funciona
            'email.unique' => 'El campo email no es unico',
            'password.required' => 'El campo password es obligatorio'
        ]);


        /*Validación rudimentaria de un campo*/
        /*if (empty($data['name'])) {
            return redirect(url('usuarios/nuevo'))->withErrors([
                'name' => 'Campo obligatorio']);
        }*/
  
        //try {
            Recipe::create([
                'description' => $data['description'],
            ]);
        /*} catch(\Illuminate\Database\QueryException $ex){
          dd($ex->getMessage()); //$ex->getCode()
        }*/

        /*Se redirecciona a la lista de usuarios*/
        return redirect(url('wellcome'));
    }
}
