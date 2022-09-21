<?php

use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login-post', [AuthController::class, 'login'])->name('login');
Route::get('/registration', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/home', [AuthController::class, 'home']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
// Route::post('/login-post', [AuthController::class, 'login']);
