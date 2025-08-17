<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()  // formulario de login
    {
        return view('auth.login'); // Breeze ya trae esta vista
    }

    public function store(Request $request) // procesa login
    {
        $credentials = $request->validate([
            'email'    => ['required','email'],
            'password' => ['required','string'],
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate(); // evita fixation
            return redirect()->intended(route('dashboard'));
        }

        throw ValidationException::withMessages([
            'email' => __('Estas credenciales no coinciden con nuestros registros.'),
        ]);
    }

    public function destroy(Request $request) // logout
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
