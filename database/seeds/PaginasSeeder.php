<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class PaginasSeeder extends Seeder
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
 
       
 
            \DB::table('menu')->insert([
               ['nombre' => 'Menu Principal'],
               ['nombre' => 'Menu Secundario']
              ]);

            \DB::table('atributos_menu')->insert([
                ['tipo' => 'navbar-inverse', 
                'posicion' => 'navbar-right',
                'estado' => 'navbar-fixed-bottom',
                'color' => 'black',
                'menu_id' => 1],
                ['tipo' => 'navbar-inverse', 
                'posicion' => 'navbar-right',
                'estado' => 'navbar-fixed-bottom',
                'color' => 'black',
                'menu_id' => 2],
                
            ]);

            \DB::table('layout')->insert([
               ['nombre' => 'template1'],
               ['nombre' => 'template2']
              ]);

             

           \DB::table('pagina')->insert([
               ['titulo' => 'Inicio', 
                'url' => 'inicio',
                'descripcion'=> $faker->text,
                'orden_menu' =>1,
                'orden_submenu' => 0,
                'layout_id'=>1,
                'menu_id'=>1],
                ['titulo' => 'idioma', 
                'url' => 'idioma',
                'descripcion'=> $faker->text,
                'orden_menu' =>2,
                'orden_submenu' => 1,
                'layout_id'=>1,
                'menu_id'=>1],
                ['titulo' => 'ingles', 
                'url' => 'ingles',
                'descripcion'=> $faker->text,
                'orden_menu' =>2,
                'orden_submenu' => 2,
                'layout_id'=>1,
                'menu_id'=>1],
                ['titulo' => 'coreano', 
                'url' => 'coreano',
                'descripcion'=> $faker->text,
                'orden_menu' =>3,
                'orden_submenu' => 1,
                'layout_id'=>1,
                'menu_id'=>1],
                ['titulo' => 'servicio', 
                'url' => 'servicio',
                'descripcion'=> $faker->text,
                'orden_menu' =>4,
                'orden_submenu' => 0,
                'layout_id'=>1,
                'menu_id'=>1],
                
              ]);

    }
}
