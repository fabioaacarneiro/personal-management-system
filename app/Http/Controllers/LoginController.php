<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ], [
            'email.required' => 'E-mail é obrigatório.',
            'email.email' => 'E-mail inválido.',
            'password' => 'Senha é obrigatória.',
            //'password.min' => 'Senha precisa de no mínimo :min caracteres.'
        ]);

        $credentials = $request->only('email', 'password');
        $authenticated = Auth::attempt($credentials);

        var_dump($authenticated);

        if(!$authenticated) {
            var_dump($credentials);
            return redirect()->route('login.index')->withErrors(['error' => 'email or password is invalid']);
        }

        return redirect()->route('login.index')->with('success', 'Logged in');

    }

    public function destroy() {
        var_dump('login');
    }
}
