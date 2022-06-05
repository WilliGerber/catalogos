<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function entrar(Request $req) {
        $credentials = [
            'email' => $req->email,
            'password' => $req->senha,
        ];
        // dd($credentials);
        if(Auth::attempt($credentials)) return redirect()->route('catalogos');
        return redirect()->back()->withErrors(['Os dados informados não conferem']);
    }

    public function sair() {
        Auth::logout();
        return redirect()->route('login');
    }

}
