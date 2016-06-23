<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Pagina;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{


     public function __construct() { 

        $this->middleware('auth');

        //$this->usuario= \Auth::user();

    }
      /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {    

    $categoria=\DB::table('pagina')
                    ->where('orden_submenu','=',1)
                    ->paginate(2)
                    ->setPath('categoria');
    

        return view("admin.categoria.index")->with('administrador', $categoria);

        
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

          

            return view("admin.categoria.createUpdate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Pagina $pagina)
    {
            $obcategoria = new \App\Pagina;
 
    $obcategoria->titulo = \Request::input('titulo');
 
    $obcategoria->url = \Request::input('url');

    $obcategoria->descripcion = \Request::input('descripcion');

    $obcategoria->orden_menu = \Request::input('orden_menu');

     $obcategoria->orden_submenu=\Request::input('orden_submenu');

    $obcategoria->layout_id = \Request::input('layout_id');

     $obcategoria->menu_id=\Request::input('menu_id');
 
    $obcategoria->save();
 
    return redirect('categoria/create')->with('message', 'Admin saved');
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
        return view('admin.categoria.createUpdate')->with('admin', \App\Pagina::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Pagina $pagina)
    {
        $obcategoria = \App\Pagina::find($id);
 
    $obcategoria->titulo = \Request::input('titulo');
 
    $obcategoria->url = \Request::input('url');

    $obcategoria->descripcion = \Request::input('descripcion');

    $obcategoria->orden_menu = \Request::input('orden_menu');

     $obcategoria->orden_submenu=\Request::input('orden_submenu');

    $obcategoria->layout_id = \Request::input('layout_id');

     $obcategoria->menu_id=\Request::input('menu_id');
 
    $obcategoria->save();
 
    return redirect()->route('categoria.edit', ['admin' => $id])->with('mensaje', 'Admin updated');
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

 
 
    return redirect()->route('admin.categoria.index')->with('message', 'Admin deleted');


    }


}
