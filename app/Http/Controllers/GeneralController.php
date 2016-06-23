<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\General;
use Illuminate\Support\Facades\Session;
use DB;


class GeneralController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct() { 

        $this->middleware('auth');

        //$this->usuario= \Auth::user();

    }


    public function index()
    {
        //


        /* if(empty(\App\general::first())){
             $admin=null;

        }

        if(!empty(\App\general::first())){
            $admin=\App\general::first();
           } 
             
        return view('admin.general.index')->with(['admin'=>$admin,
                                                   'nombre_usuario'=>$this->usuario->name

                                                  ]); */

return view('admin.general.index')->with(['admin'=> \App\general::find(1)

                                           //'nombre_usuario'=>$this->usuario->name
    ]);
       
     

     }   

   
           
            
             
        
    

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(/*General $General*/)
    {
        //
     /*  $general = new \App\General;
 
    $general->titulo = \Request::input('titulo');
 
    $general->descripcion = \Request::input('descripcion');

     $general->correo = \Request::input('correo');

      $general->url = \Request::input('url');

    $general->save();


 
    return view('admin.general.index')->with(['message'=> 'TemplateAdminRequest saved',

                                                             'admin'=>\App\general::first(),
                                                             'nombre_usuario'=>$this->usuario->name
                                                          ]);
*/
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, General $General)
    {
        //
        $general = \App\general::find($id);
 
    $general->titulo = \Request::input('titulo');
 
    $general->descripcion = \Request::input('descripcion');

     $general->correo = \Request::input('correo');

      $general->url = \Request::input('url');

    $general->save();
 
    return redirect()->route('admin.general.index', ['admin' => $id])->with('message', 'Admin updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    public function pagina(){
        return view('admin.prueba.pagina');
    }
}
