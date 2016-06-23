<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\Banner;
use Illuminate\Support\Facades\Session;
use DB;

class BannerController extends Controller
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

    

        return view("admin.banner.index")->with('administrador', \App\banner::paginate(2)->setPath('banner'));
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

          
 return view("admin.banner.createUpdate");
           
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Banner $banner)
    {
            $banner = new \App\banner;
 
    $banner->titulo = \Request::input('titulo');
 
    $banner->descripcion = \Request::input('descripcion');

    //upload imagen
          //obtenemos el campo file definido en el formulario
          $file = \Request::file('imagen');


 
          //obtenemos el nombre del archivo
          $nombre = $file->getClientOriginalName();

          $num_aleatorio = rand(1, 50);

          $nombre_concatenado= $num_aleatorio.$nombre;

          $banner->imagen = $nombre_concatenado;
          

         //indicamos que queremos guardar un nuevo archivo en el disco local
         \Storage::disk('local')->put($nombre_concatenado,  \File::get($file));

    //fin upload imagen

   
 
    $banner->url = \Request::input('url');

    $banner->ancho = \Request::input('ancho');
 
    $banner->altura = \Request::input('altura');

     $banner->formato = \Request::input('formato');
 
    $banner->save();
 
    return redirect('banner/create')->with('message', 'Admin saved');
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
        return view('admin.banner.createUpdate')->with('admin', \App\banner::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Banner $banner)
    {
        $banner = \App\banner::find($id);
 
    $banner->titulo = \Request::input('titulo');
 
    $banner->descripcion = \Request::input('descripcion');

 // $extension = strtolower(\Input::file('imagen')->getClientOriginalExtension());


    if(\Request::file('imagen')){
                
          \Storage::delete($banner->imagen);
        //upload imagen
          //obtenemos el campo file definido en el formulario
          $file = \Request::file('imagen');


 
          //obtenemos el nombre del archivo
          $nombre = $file->getClientOriginalName();

          $num_aleatorio = rand(1, 50);

          $nombre_concatenado= $num_aleatorio.$nombre;

          $banner->imagen = $nombre_concatenado;
          

         //indicamos que queremos guardar un nuevo archivo en el disco local
         \Storage::disk('local')->put($nombre_concatenado,  \File::get($file));

    //fin upload imagen
    }else{

        $banner->imagen = \Request::input('imagen_banner');


    }

    
    
 
    $banner->url = \Request::input('url');

    $banner->ancho = \Request::input('ancho');
 
    $banner->altura = \Request::input('altura');

     $banner->formato = \Request::input('formato');
 
    $banner->save();


 
 
    return redirect()->route('banner.edit', ['admin' => $id])->with('mensaje', 'Admin updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
            $dadmin = \App\banner::find($id);
 
    $dadmin->delete();

      
 
     return redirect()->route('banner.index')->with('message', 'Admin deleted');

    
    }

    public function save(Request $request)
{
 
       //obtenemos el campo file definido en el formulario
       $file = $request->file('imagen');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();

       $banner=new \App\banner;
       $banner->imagen = $nombre; 
       $banner->save();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
 
       return "archivo guardado";
}


}
