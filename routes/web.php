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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('pages.about');
});
 
Route::get('/places', function () {
    return view('pages.places');
});

Route::get('/reviews', function () {
    return view('pages.reviews');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/users', function () {
    return view('pages.users');
});
  
Route::get('login', [UserController::class, 'login']);//->middleware('alreadyLoggedIn');
Route::get('signup', [UserController::class, 'signup']);//->middleware('alreadyLoggedIn');
Route::post('register-user', [UserController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [UserController::class, 'loginUser'])->name('login-user');
Route::get('udashboard',[UserController::class, 'udashboard']);//->middleware('isLoggedIn');
Route::get('logout',[UserController::class, 'logout'] );