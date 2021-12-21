<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()) {
            return view('dashboard.home', array(
                'nome' => Auth::user()->nome,
                'email' => Auth::user()->email
            ));
        }

        return redirect()->intended('/')->with('error', 'Você não está logado no sistema');
    }
}
