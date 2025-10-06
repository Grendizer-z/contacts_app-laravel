<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SesionController extends Controller
{
    public function showLoginForm()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        //view('index');
        $credentials = $request->validate([
            'email' => 'required|email',
            'clave' => 'required', 
        ]);

        if (Auth::attempt(['email' => $credentials['email'], 'clave' => $credentials['clave']])) {
            $request->session()->regenerate(); 

            return redirect('/contacts'); 
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); 
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
