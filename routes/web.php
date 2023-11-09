<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

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

Route::post('/', [AuthenticationController::class, 'authenticate'])->name('login.post');

Route::get('/cadastrar', [AuthenticationController::class, 'registerIndex'])->name('register');
Route::post('/cadastrar', [AuthenticationController::class, 'create'])->name('register.post');

Route::get('finansee', function (){
    return view ('Screen-FinanSee');
});