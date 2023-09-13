<?php

namespace App\Http\Controllers;
use App\Models\Contacto;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contactoForm($tipo = null){
        return view('contacto', compact('tipo'));

    }
    public function contactoSave( Request $request){
           /* return "Hola POST formulario";*/
    /* var_dump($request)*/
    /*dd($request->all());  /*mata aplicacion y pasa contenido del parametro */

    $request ->validate([   /**  reglas, cosas requeridas para nuestro formulario */
        'correo' => 'required|email',
        'comentario' => ['required','min:10', 'max:50'],

    ]);
    

    $contacto = new Contacto();
    $contacto -> correo = $request -> correo;
    $contacto -> comentario = $request -> comentario;
    $contacto ->save();

    return redirect('/contacto'); /*redirecciona a la ruta */

    }
}
