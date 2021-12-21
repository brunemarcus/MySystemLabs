<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'login']);
Route::post('/auth', [LoginController::class, 'auth'])->name('auth.user');
Route::get('/dashboard',[HomeController::class, 'index'])->middleware('auth');
