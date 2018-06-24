<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Esta consulta selecciona una "n" cantidad de elementos a retornar*/
        //$professions = DB::table('professions')->select('id')->take(3)->get();

        /*Se usar "first()" para usar [0]*/
        //dd(find($id))
        //dd($professions->first()->id);

        /*Consulta simple*/
        //$profession = DB::table('professions')->select('id')->first();

        /*Consulta condicionada*/
        //$profession = DB::table('professions')->select('id', 'title')->where('title', '=', 'Desarrollador front-end')->first();

        /*Consulta que trae todos los atributos*/
        //$profession = DB::table('professions')->where('title', '=', 'Desarrollador front-end')->first();

        /*Consulta que trae todos los atributos con arreglo asociativo*/
        //$professionId = DB::table('professions')->select('id')->where(['title' => 'Desarrollador front-end'])->first();

        /*Se usa el método mágico "whereTitle" el cual se crea anexando a la
        instrucción where el atributo "Title" en mayuscula*/
        //$professionId = DB::table('professions')->select('id')->whereTitle('Diseñador web')->first();->last()->random(1) un registro random
        //dd($profession->id);

        /*Se trabaja directamente con una tabla de la bd*/
        /*DB::table('users')->insert([
            'name' => 'Danny ZB',
            'email' => 'crdanny2010@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId->id //Se obtiene el primer id
        ]);*/

        /*--- Se obtiene el dato de la tabla mediante el ORM Eloquent y un arreglo asociativo ---*/
        $professionId = Profession::where(['title' => 'Desarrollador front-end'])->value('id');

        /*Obtiene todos los registro de la tabla*/
        //$professions = Profession::all();

        /*Obtiene un registro de acuerdo a un id*/
        //$profession = Profession::find(1);

        //dd($profession);

        /*--- Se ingresa los datos en la tabla mediante el ORM Eloquent y un arreglo asociativo ---*/
        /*User::create([
            'name' => 'Danny ZB',
            'email' => 'crdanny2010@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId //Se obtiene el primer id
        ]);*/

        /*Crear usuarios de manera aleatoria*/
        factory(User::class)->create([
            'name' => 'Danny ZB',
            'email' => 'crdanny2010@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId //Se obtiene el primer id
        ]);

        /*Se generan 5 registros cada ves, con una profesión aleatoria*/
        factory(User::class, 5)->create([
            'profession_id' =>rand(1,3)
        ]);

        factory(User::class, 5)->create([
            'profession_id' =>rand(1,3)
        ]);

        factory(User::class, 5)->create([
            'profession_id' =>rand(1,3)
        ]);
    }
}
