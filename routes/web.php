<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contacto/{tipo?}', function ($tipo = null) {
    /*dd($tipo);*/
    /*return view('contacto',compact('tipo'));*/
    return view('contacto') -> with(['tipo' => $tipo]);
});


Route::post('/contacto', function (Request $request) {
   /* return "Hola POST formulario";*/
    /* var_dump($request)*/
    dd($request->all());  /*mata aplicacion y pasa contenido del parametro */
});

