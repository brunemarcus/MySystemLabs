<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Index login controller
     *
     * @return void
     */
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'E-mail é obrigatório',
            'password.required' => 'Senha é obrigatório'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            session(['authUser' => Auth::user()]);
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->with('error', 'E-mail ou senha inválidos');
    }
}
