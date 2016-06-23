<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    //
    protected $table = 'banner';
 
	protected $fillable = ['titulo', 'descripcion','imagen','url','ancho','altura','formato'];
 
	protected $guarded = ['id'];
}
