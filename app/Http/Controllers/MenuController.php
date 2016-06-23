<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Pagina;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;


class MenuController extends Controller
{

    public function __construct() { 

        $this->middleware('auth');

       

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {    
          $pagina=\DB::table('pagina')
                    ->where('orden_submenu','<>',1)
                    ->paginate(5)
                    ->setPath('menu');
    

        return view("admin.pagina.index")->with('administrador', $pagina);
    }


    /* 

     public function crear()
    {
        return view("posts.create");
    }

    */


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {

          

            return view("admin.pagina.createUpdate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Pagina $pagina)
    {
            $bdpagina = new \App\pagina;
 
    $bdpagina->titulo = \Request::input('titulo');
 
    $bdpagina->url = \Request::input('url');

    $bdpagina->descripcion = \Request::input('descripcion');

            $orden_menu=\Request::input('orden_menu');
            $orden_submenu=\Request::input('orden_submenu');

         if($orden_submenu==0){
                 $bdpagina->orden_menu= \Componente::menu_siguiente_menu();
                     $bdpagina->orden_submenu=0;
         }else{

            $bdpagina->orden_menu= $orden_submenu;
            $bdpagina->orden_submenu=\Componente::menu_siguiente_submenu($orden_submenu);
         }
    

     




     $bdpagina->layout_id = \Request::input('layout_id');

     $bdpagina->menu_id=\Request::input('menu_id');
 
    $bdpagina->save();




    return redirect('menu/create')->with('message', 'Admin saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.pagina.createUpdate')->with('admin', \App\pagina::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Pagina $pagina)
    {
        $bdpagina = \App\pagina::find($id);
 
    $bdpagina->titulo = \Request::input('titulo');
 
    $bdpagina->url = \Request::input('url');

    $bdpagina->descripcion = \Request::input('descripcion');

     $bdpagina->orden_menu=\Request::input('orden_menu');

    $bdpagina->orden_submenu=\Request::input('orden_submenu');


     $bdpagina->layout_id = \Request::input('layout_id');

     $bdpagina->menu_id=\Request::input('menu_id');
 
    $bdpagina->save();


    return redirect()->route('menu.edit', ['admin' => $id])->with('mensaje', 'Admin updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
            $dadmin = \App\Pagina::find($id);
 
    $dadmin->delete();

  
 
    return redirect()->route('menu.index')->with('message', 'Admin deleted');

    
    }


}
