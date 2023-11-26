<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use  App\Http\Controllers\Auth\ForgotPasswordController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'index'])->name('forgot.password');
//Route::post('/do-forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'Forgot'])->name('do.forgot.password');




Route::resource('students', StudentController::class);

