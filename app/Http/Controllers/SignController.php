<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignController extends Controller
{
    public function index() {
        return view('sign');
    }

    public function store(Request $request ) {

        try {
            if (!$request->email == $request->email_confirm) {
                return 'Emails precisam ser iguais.';
            } else if (!$request->password == $request->password_confirm) {
                return 'As senhas precisam ser iguais,';
            }
        } catch (\Throwable $th) {
            return 'Não foi possível cadastrar o usuário';
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return 'Usuário cadastrado com sucesso!';
    }
}
