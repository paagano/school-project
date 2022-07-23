<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;

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

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/users', function () {
    return view('pages.users');
});

Route::get('/', [PagesController::class, 'homePage']);
Route::get('/about', [PagesController::class, 'aboutPage']);
Route::get('/places', [PagesController::class, 'placesPage']);
Route::get('/reviews', [PagesController::class, 'reviewsPage']);
Route::get('/blog', [PagesController::class, 'blogPage']);
Route::get('/login', [PagesController::class, 'loginPage']);//->middleware('alreadyLoggedIn');
Route::get('/signup', [PagesController::class, 'signupPage']);//->middleware('alreadyLoggedIn');


Route::post('register-user', [UsersController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [UsersController::class, 'loginUser'])->name('login-user');
Route::get('udashboard',[UsersController::class, 'udashboard']);//->middleware('isLoggedIn');
Route::get('logout',[UsersController::class, 'logout'] );