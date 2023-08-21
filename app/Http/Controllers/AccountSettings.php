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
                    $user->update([
                        'password' => $request->new_password
                    ]);
                } else {
                    return 'as senhas não combinas.';
                }
            }
        } catch (\Throwable $th) {
            return 'não foi possível atualizar a senha,';
        }
    }
}
