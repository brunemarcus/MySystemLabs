<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Index login controller
     *
     * @return void
     */
    public function logout(Request $request)
    {
        if(Auth::check()) {
            session()->forget(Auth::user()->id);
            auth()->logout();

            return redirect()->intended('/')->with('success', 'Deslogado com sucesso!');
        }
    }
}
