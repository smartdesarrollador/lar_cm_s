<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    //
    protected $table = 'pagina';
 
	protected $fillable = ['titulo', 'url','descripcion','orden_menu', 'orden_submenu','layout_id','menu_id'];
 
	protected $guarded = ['id'];


	
}
