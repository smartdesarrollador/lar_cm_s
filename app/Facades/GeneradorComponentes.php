<?php
 
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
 
class GeneradorComponentes extends Facade {
 
    protected static function getFacadeAccessor()
    {
        return 'banner';
    }
}