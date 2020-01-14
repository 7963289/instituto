<?php

use Illuminate\Database\Seeder;

class MateriasImpartidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') != 'production') {
            DB::table('materiasimpartidas')->truncate();

            $materias = factory(App\Materiaimpartida::class, 20)->create();

            //TODO SEEDER CORRECTO CON RELACIONES BIEN HECHAS

        }
    }
}
