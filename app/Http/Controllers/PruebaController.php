<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PruebaController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return "Hello Controller";
    }

    public function name($nombre)
    {
        return "My name is: ".$nombre;
    }

}
