<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('auth.login');
    }

    public function login(Request $req){
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!Auth::attempt(['email' => $req->email, 'password' => $req->password], $req->token)){
            return redirect()->back()->with('status','Invalid login details!');
        }

        return redirect()->route('dashboard');
    }
}
