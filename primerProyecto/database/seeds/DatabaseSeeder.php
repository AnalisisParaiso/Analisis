<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'professions',
            'users'
        ]);

        /*Se debe hacer la llamada de cada seeder que sea necesario*/
        $this->call(ProfessionSeeder::class);
        $this->call(UserSeeder::class);
    }

    /*Se eliminan datos de varias tablas de manera dinámica*/
    private function truncateTables(array $tables)
    {
        /*Desactiva la validación de llaves foraneas*/
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            /*Se eliminan los datos de la tabla siempre y cuando no exista una
            restricción de llave foranea*/
            DB::table($table)->truncate();
        }

        /*Reactiva la validación de llaves foraneas*/
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
