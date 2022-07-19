<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Route::get('/login', function () {
    return view('pages.login');

});

Route::get('/signup', function () {
    return view('pages.signup');

});Route::get('/users', function () {
    return view('users');
});

Route::get('/registration', [UserController::class, 'registration']);

Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');
  
