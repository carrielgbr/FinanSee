<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;


use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Middleware\Authenticate;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Screen-Home', [
        "errorLogin" => false
    ]);
})->name('home');


Route::get('/',[AuthenticationController::class, 'loginIndex'])->name('login.get');
Route::post('/', [AuthenticationController::class, 'authenticate'])->name('login.post');

Route::get('/cadastrar', [AuthenticationController::class, 'registerIndex'])->name('register.get');
Route::post('/cadastrar', [AuthenticationController::class, 'create'])->name('register.post');


Route::get('/esqueceuasenha', [AuthenticationController::class, 'forgotpassword'])->name('ForgotPassword');
Route::post('/esqueceuasenha', [AuthenticationController::class, 'forgot'])->name('ForgotPassword.post');
