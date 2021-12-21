<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
