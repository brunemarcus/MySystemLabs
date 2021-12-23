<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //
    public function __construct()
    {
        //
    }

    public function DeleteUser(Request $request,$id)
    {
        if(Auth::check()) {
            if(User::findOrFail(Auth::id())->type_profile == 0) {
                try {
                    if(User::find($id)->update(['active' => 0]))
                        return redirect()->intended('/dashboard')->with('success', 'Usuário removido com sucesso!');

                    return redirect()->intended('/dashboard')->with('error', 'Erro ao deletar usuário!');
                } catch (\Exception $e) {
                    return redirect()->intended('/dashboard')->with('error', 'Erro ao deletar usuário!');
                }
            }

            return redirect()->intended('/dashboard')->with('error', 'Você não tem permissão para executar está ação!');
        }

        return redirect()->intended('/')->with('error', 'Você não está logado no sistema');
    }
}
