<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtributosMenu extends Model
{
    //
     protected $table = 'atributos_menu';
 
	protected $fillable = ['tipo', 'posicion','estado','color','menu_id'];
 
	protected $guarded = ['id'];
}
