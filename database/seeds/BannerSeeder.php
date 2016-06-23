<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class BannerSeeder extends Seeder
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
 
        for($i = 0; $i<4; $i++){
 
            \DB::table('banner')->insert(array(
                
                'titulo'  => $faker->name,
                'descripcion'       => $faker->text,
                'imagen'     => $faker->imageUrl($width = 1200, $height = 400),
                'url' => $faker->url,
                'ancho'=>1200,
                'altura'=>400,
                'formato'=>'jpg'
            ));
        }
    }
}
