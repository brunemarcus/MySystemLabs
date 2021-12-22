<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\api\UserController;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout.user');
Route::post('/auth', [LoginController::class, 'auth'])->name('auth.user');
Route::get('/dashboard',[HomeController::class, 'index']);


Route::prefix('/api')->group(function() {
    Route::get('/delete/user/{id}', [UserController::class, 'DeleteUser'])->name('delete.user');
});
