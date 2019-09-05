<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bienvenido extends Controller
{
    public function hola()
    {
        return view('welcome');
    }

    public function suma()
    {
        return 'sumaXD';
    }
}
