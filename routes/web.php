<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
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

//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

//Auth
Route::get('/userLogin', [LoginController::class, 'index']);
Route::get('/userRegister', [RegistrationController::class,"index"]);
Route::post('/userRegister', [RegistrationController::class,"store"])->name('register');
Route::post('/userLogin', [LoginController::class,"store"])->name('login');

