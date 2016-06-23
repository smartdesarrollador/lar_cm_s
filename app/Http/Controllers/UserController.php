<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        $info=($id + 2) ;

        $data=['info' => $info ];

        return view('user', $data);
    }

    public function hola(){
        return "que tal";
    }

    public function inicio(){

    }
}