<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// pages
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/post', [PageController::class, 'post'])->name('post');

// register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/add', [RegisterController::class, 'register'])->name('add');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/enter', [LoginController::class, 'login'])->name('enter');

// logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
