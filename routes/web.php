<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'home', 'uses'=>'homeController@home']);

Route::get('saludo/', ['as' => 'saludo', function () {

    return view('saludo');
}]);

Route::get('/contacto/{id?}', ['as' => 'contacto', function($id = "wea") {
    
    $marcas = ["Honda", "Kwasaky", "Aprilla", "Suzuki"];
    $html = "<h2>contenido HTML</h2>";
    $script = "<script>alert('Problema de seguridad')</script>";

    return view('contacto', compact('id','html','script','marcas'));
}])->where('id', "[0-9]+");

Route::post('saludo', 'crearContactoController@mensajes')->middleware('saludoOK');

Route::get('mensajes/create',['as'=>'mensages.create','uses'=>'MessagesController@create']);
Route::post('mensajes',['as'=>'mensages.store','uses'=>'MessagesController@store']);