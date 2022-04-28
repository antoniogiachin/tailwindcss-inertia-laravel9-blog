<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return inertia('Auth/Login');
    }

    // post login con validation
    public function store(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember') ? true : false;

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            // questo rediretta alla pagina dove stavi cercando di accedere prima del login, nel nostro caso lo mettiamo in home lasciandolo vuoto
            // return redirect()->intended('dashboard');
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Utente non registrato.',
        ])->onlyInput('email');
    }

    //funzione creazione utente
    public function create(){
        return inertia('Auth/Register');
    }

    // funzione per logout
    public function destroy(){
        Auth::logout();
        return redirect()->route('home');
    }
}
