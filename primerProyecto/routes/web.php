<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Se inserta la cita*/
Route::post('/appointment/store', 'AppointmentController@store');

/*Se inserta el usuario*/
Route::post('/user/store', 'UserController@store');

/*Se inserta la descripción de la receta con su respectivo usuario*/
Route::post('/recipe/store', 'RecipeController@store');

/*Se inserta un especialista*/
Route::post('/specialist/store', 'SpecialistController@store');


/*Rutas GET: son para solicitar y obtener información,
  Rutas POST: son para enviar y procesar información*/
Route::get('/', function () {
    return view('welcome');
})->name('wellcome');

/*Hace llamada al método "index" del controlador " "*/
Route::get('/usuarios', 'UserController@index')->name('users.usersList');

Route::post('/prueba', 'UserController@prueba')->name('prub');

Route::get('/usuarios/components/{id?}', 'UserController@components')
->where('id', '[0-9]+')->name('components');


/*Como la varaible "id" es dinámica se usa la instrucción where indicando mediante
[0,9]+ que la ruta puede rescibir más de un valor númerico que estara entre cero y nueve.*/
/*Ejemplo: si se tiene la ruta: detalles/{id} y la ruta detalles/{nombre} al hacer
la petición de la ruta el sistema accedera a la primera que aparezca por ello,
se especifíca el tipo de parámetro para saber a cual ruta accede.*/
Route::get('/usuarios/detalles/{id}', 'UserController@show')
    ->where('id', '[0-9]+')->name('users.details');

/*Accede  a la vista que contiene el método de crear un usuario*/
Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');

/**/
Route::post('/usuarios/crear', 'UserController@store');


/*Route::get('/saludo/{name}/{nickname}', function($name , $nickname) {
    return "Hola {$name}, {$nickname}";
});

/*Parametro opcional*/
Route::get('/saludo/{name}/{nickname?}', 'WellcomeUserController');

/*Cuando se envía el usuario, la ruta anexa por defecto la parte que dice edit*/
Route::get('/usuarios/{user}/editar', 'UserController@edit')->name('users.edit');

/*El put es para actualizar*/
Route::put('/usuarios/{user}', 'UserController@update');

/*El delete es para eliminar*/
Route::delete('/usuarios/{user}', 'UserController@destroy')->name('users.destroy');
