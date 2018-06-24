<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Profession;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        /*Desactiva la validación de llaves foraneas*/
        //DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        /*Se eliminan los datos de la tabla siempre y cuando no exista una
        restricción de llave foranea*/
        //DB::table('professions')->truncate();

        /*Reactiva la validación de llaves foraneas*/
        //DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        /*Se trabaja directamente con una tabla de la bd*/
        /*DB::table('professions')->insert([
            'title' => 'Desarrollador back-end',
        ]);

        DB::table('professions')->insert([
            'title' => 'Desarrollador front-end',
        ]);

        DB::table('professions')->insert([
            'title' => 'Diseñador web',
        ]);*/

        /*Se usa el ORM Eloquent para comunicarse con la bd
        Nota: Al crear un modelo se obtiene acceso a una gran cantidad de métodos
        propios del objeto model, tal como el método "create", y se envía un
        --- arreglo asociativo ---*/
        Profession::create([
            'title' => 'Desarrollador back-end',
        ]);

        Profession::create([
            'title' => 'Desarrollador front-end',
        ]);

        Profession::create([
            'title' => 'Diseñador web',
        ]);

        /*S ingresan 17 profesiones*/
        factory(Profession::class , 17)->create();
    }
}
