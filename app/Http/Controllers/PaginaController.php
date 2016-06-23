<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaginaController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id=1)
    {
        //
       // $general = \App\General::first();
        //dd(\Componente::submenu_mostrar(7));


        //return view('pagina.index')->with('titulo',$general->titulo);

        
        $paginas = \DB::table('pagina')
        ->select(['titulo','descripcion' ])
        ->where('id','=',$id)
        ->get();

      

       
        return view('pagina.index', ['paginas' => $paginas]);

       
    }

   

    

    
}
