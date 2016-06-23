<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Footer;
use Illuminate\Support\Facades\Session;
use DB;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct() { 

        $this->middleware('auth');

    

    }


    public function index()
    {
       

return view('admin.general.footer')->with(['admin'=> \App\footer::find(1)
                                    
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
    public function update($id, Footer $Footer)
    {
        //
        $footer = \App\footer::find($id);
 
    $footer->url = \Request::input('url');
 
    $footer->descripcion = \Request::input('descripcion');

     $footer->periodo = \Request::input('periodo');

     

    $footer->save();
 
    return redirect()->route('admin.footer.index', ['admin' => $id])->with('message', 'Admin updated');
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
}
