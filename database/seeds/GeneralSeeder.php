<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $faker = Faker::create();
 
        for($i = 0; $i<1; $i++){
 
            \DB::table('general')->insert(array(
                'id'         => 1,
                'titulo'  => 'Titulo de la Pagina',
                'descripcion'       => 'Descripcion de la Pagina',
                'correo'     => 'ejemplo@dominio.com',
                'url' => 'www.nombrededominio.com'
            ));
        }
    }
}
