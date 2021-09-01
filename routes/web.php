<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/job', function () {
    return view('job');
});
Route::get('/employers', function () {
    return view('employers');
});
Route::get('/candidates', function () {
    return view('candidates');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/userLogin', function () {
    return view('login');
});
Route::get('/userRegister', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('login/google', 'App\Http\Controllers\Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
