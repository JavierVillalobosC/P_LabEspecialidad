<?php

use App\Http\Controllers\AdminController;

use  App\Http\Controllers\ComputadorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create soming great!
|
*/

Route::get('/', function () {
    return view('user/home', ['title' => '']);
})->name('home');

Route::get('register', [AdminController::class, 'register'])->name('register');
Route::post('register', [AdminController::class, 'register_action'])->name('register.action');
Route::get('login', [AdminController::class, 'login'])->name('login');
Route::post('login', [AdminController::class, 'login_action'])->name('login.action');
Route::get('password', [AdminController::class, 'password'])->name('password');
Route::post('password', [AdminController::class, 'password_action'])->name('password.action');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/dash', 'App\Http\Controllers\DashboardController@index');


Route::get('computadores', [ComputadorController::class, 'index'])->name('computadores');
Route::get('computadores/create', [ComputadorController::class, 'create'])->name('create');
Route::get('computadores/edit', [ComputadorController::class, 'edit'])->name('edit');
Route::get('/dash', 'App\Http\Controllers\DashboardController@index');
