<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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
    return view('home');
});

Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login-post', [AuthController::class, 'login'])->name('login');
Route::get('/registration', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/home', [AuthController::class, 'home']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::resource('/products', [ProductController::class]);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
Route::post('/products/update/{id}', [ProductController::class, 'update']);
// Route::post('/login-post', [AuthController::class, 'login']);
