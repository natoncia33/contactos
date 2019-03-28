<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
       // return ['key' => ['value', 'value1']];
       // return response ('hola');
       // return response ('hola',201,['petrosky','encriptado']);
        return response ('hola',201)
                                    ->header('petrosky','encriptado')
                                    ->cookie('sabrososky','valido');
        return view('home');
    } 
}
