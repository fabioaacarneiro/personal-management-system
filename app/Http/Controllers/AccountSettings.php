<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AccountSettings extends Controller
{
    public function update_password(Request $request, $id) {
        try {
            $user = User::findOrFail($id);
        } catch (Exception) {
            return 'Usuário inválido ou não existe no registro';
        }

        try {
            if ($request->password == $user->password) {
                if ($request->new_password == $request->new_password_confirm) {
                    $user->update(['password' => $request->new_password]);
                } else {
                    return 'As senhas não combinas.';
                }
            }
        } catch (Exception) {
            return 'Não foi possível atualizar a senha,';
        }
    }

    public function update_name(Request $request, $id) {
        try {
            $user = User::findOrFail($id);
        } catch (Exception) {
            return 'Usuário inválido ou não existe no registro';
        }

        try {
            $user->update(['name' => $request->new_name]);
        } catch (Exception) {
            return 'Não foi possível atualizar o nome do usuário';
        }
    }

    public function reset_password(Request $request, $id) {
        try {
            $user = User::findOrFail($id);
        } catch (Exception) {
            return 'Usuário inválido ou não existe no registro';
        }

        try {
            if ($request->confirm_reset == "resetar" && $request->email == $user->email) {
                $new_password_token = rand(10000000, 9999999);
                $user->update(['email' => $new_password_token]);
            } else {
                return 'E-Mail ou confirmação inválidos, revise por favor.';
            }
        } catch (Exception) {
            return 'Não foi possível resetar a senha.';
        }
    }
}
