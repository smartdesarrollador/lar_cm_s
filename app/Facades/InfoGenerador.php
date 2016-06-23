<?php
 
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
 
class InfoGenerador extends Facade {
 
    protected static function getFacadeAccessor()
    {
        return 'campo';
    }
}