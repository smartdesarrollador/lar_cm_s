<?php
namespace App\Components;
 
use View;
 
class InfoGenerador
{
 
    public function general($campo){
    	return view()->share('campo', \App\general::first()->$campo);
    }

    public function footer($campo){
    	return view()->share('footer', \App\footer::first()->$campo);
    }
}