<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\ComputadorController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
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
    return view('/layouts/plantilla');
});

Route::get('register_user', [UserController::class, 'register_user'])->name('register_user');
Route::post('register_user', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logoutt');
Route::get('/dash', 'App\Http\Controllers\DashboardController@index');


Route::get('computador', [ComputadorController::class, 'index'])->name('index');
Route::get('computador/create', [ComputadorController::class, 'create'])->name('create');
Route::post('computador/create_action', [ComputadorController::class, 'create_action'])->name('create.action');
Route::get('computadores/edit', [ComputadorController::class, 'edit'])->name('edit');
Route::get('/dash', 'App\Http\Controllers\DashboardController@index');

    // Authentication Routes...
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class,'login']);
Route::post('logout', [LoginController::class,'logout'])->name('logout');

    // Registration Routes...
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

    // Password Reset Routes...
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');

    // Confirm Password
Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

    // Email Verification Routes...
Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::get('email/resend',  [VerificationController::class, 'resend'])->name('verification.resend');
    
    // Home



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Crud
Route::resource('estados', App\Http\Controllers\EstadosController::class);
Route::resource('computadores', App\Http\Controllers\ComputadorController::class);

Route::resource('prestamo', App\Http\Controllers\PrestamoController::class);
