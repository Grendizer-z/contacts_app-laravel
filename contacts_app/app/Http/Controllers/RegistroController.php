<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

class RegistroController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email',
            'clave' => 'required|string|min:8|confirmed',
        ]);

        $user =new User();
        $usuario->nombre=$request->nombre;
        $usuario->email=$request->email;
        $usuario->clave=bcrypt($request->clave);
        $usuario->fecha_creacion=now();
        $usuario->save();
        
        //return redirect('/')->with('success', 'Registro completado con éxito!');
    }
}