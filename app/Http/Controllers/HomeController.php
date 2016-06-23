<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //

 public function index()
    {
        //return \View::make('home'); 

        return view('admin.prueba.pagina');  
    }

     public function formulario()
    {
        return \View::make('basico/formulario');   
    }
}
