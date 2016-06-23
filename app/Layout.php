<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    //
    protected $table = 'layout';
 
	protected $fillable = ['nombre'];
 
	protected $guarded = ['id'];
}
