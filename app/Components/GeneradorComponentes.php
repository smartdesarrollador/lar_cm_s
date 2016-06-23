<?php
namespace App\Components;
 
use Illuminate\Support\Facades\URL;
use View;
 
class GeneradorComponentes
{
 
    public function banner($campo){
    	return view()->share('banner', \App\banner::first()->$campo);
    }

    public function bannermodel(){
    	return view()->share('banner', \App\banner::all());
    }

    public function menumodel(){
         

    	 return view()->share('pagina', \App\pagina::all());
    }

    public function menu_primero(){
        return view()->share('pagina', \App\pagina::all());
    }

    public function menu_siguiente_menu(){

        $maximo=\DB::table('pagina')->max('orden_menu');
        $siguiente=$maximo + 1;


        return view()->share('siguiente',$siguiente);
    }

    public function menu_siguiente_submenu($id){

        $maximo=\DB::table('pagina')->where('orden_menu','=',$id)->max('orden_submenu');
        $siguiente=$maximo + 1;


        return view()->share('siguiente',$siguiente);
    }

    public function menu_categoria(){

           $categoria=\App\pagina::where('orden_submenu','=',1)->get();
           



        return view()->share('categoria',$categoria);
    }

    public function submenu_mostrar($id){

        $submenu_cantidad=\App\pagina::where('orden_menu','=',$id)
       
        ->count();

        if($submenu_cantidad==1){
            $submenu_mostrar=false;
        }else{
            $submenu_mostrar=true;
        }

       

        return view()->share('submenu_mostrar',$submenu_mostrar);
    }


}