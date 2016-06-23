<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});





//Rutas para el login y registro

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
	                        
	                       
Route::post('auth/register', ['as' => 'auth/register', 
	                          'uses' => 'Auth\AuthController@postRegister']);
	                          

//Fin Rutas para el login y registro


// Pagina Home
Route::get('home', [
    'as' => 'home',
    'middleware' => ['auth'],
    'uses' => 'HomeController@index'
]);




 // Panel de Administracion
 Route::get('admin','AdminController@index');

 // Informacion General de la Pagina

 Route::resource('admin/general','GeneralController');

 // Informacion del Footer
  Route::resource('admin/footer','FooterController');

  // Banner


Route::post('banner/store', 'BannerController@store');

Route::get('storage/{archivo}', function ($archivo) {
     $public_path = public_path();
     $url = $public_path.'/storage/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);

});
  Route::resource('banner','BannerController');






 // Prueba Cms Laravel
 Route::get('pagina/{id?}','PaginaController@index');
 
 Route::get('prueba/nuevo','HomeController@index');

 // Paginas
  Route::get('inicio','PaginaController@index');

  Route::resource('menu', 'MenuController');

  Route::resource('categoria','CategoriaController');


                                     
 	                                 


 


















