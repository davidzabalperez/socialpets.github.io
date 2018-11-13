<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

class ModelController extends Controller
{
    public function insert(Request $request){
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $texto = $request->input('texto');
        $mensajeContacto = Contacto::create([
            'nombre'=>$nombre,
            'email'=>$email,
            'texto'=>$texto,

        ]);
        return redirect()->route('index')->with('alert');
    }
}
