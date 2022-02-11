<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('auth.register');
    }

    public function register(Request $req){
        $this->validate($req, [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);

        User::create([
            'name' => $req['name'],
            'email' => $req['email'],
            'password' => Hash::make($req['password'])
        ]);

        Auth::attempt([
            'email' => $req->email, 
            'password' => $req->password
        ]);
        return redirect()->route('dashboard');
    }
}
