<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class FooterSeeder extends Seeder
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
 
            \DB::table('footer')->insert(array(
                'id'         => 1,
                'url'  => 'https://google.com',
                'descripcion'       => 'Descripcion de la Pagina',
                'periodo'     => 2016,
                
            ));
        }
    }
}
