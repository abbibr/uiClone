<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only' => ['index', 'dashboard', 'post']]);
    }

    public function index(){
        return view('home');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function post(){
        return view('post');
    }
}
