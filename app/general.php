<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class general extends Model
{
    //
    protected $table = 'general';
 
	protected $fillable = ['titulo', 'descripcion','correo','url'];
 
	protected $guarded = ['id'];
}
