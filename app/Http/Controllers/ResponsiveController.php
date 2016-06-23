<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResponsiveController extends Controller
{
    //

    public function table()
    {
        return \View::make('bootstrap/table');   
    }
}
