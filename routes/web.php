<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\PostController;

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

Route::get('/', [AwalController::class, 'index']);

// Route::get('/', function () {

//     return view('welcome');
// });
// Route::get('/home', [HomeController::class, 'index']);
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
// Route::get('/register', [LoginRegisterController::class, 'register']);
// Route::post('/store', [LoginRegisterController::class, 'store']);
// Route::get('/login', [LoginRegisterController::class, 'login']);
// Route::post('/authenticate', [LoginRegisterController::class, 'authenticate']);
// Route::get('/dashboard', [LoginRegisterController::class, 'dashboard']);
// Route::post('/logout', [LoginRegisterController::class, 'logout']);

Route::get('/agenda', [AgendaController::class, 'index']);
Route::get('/aboutme', [AboutmeController::class, 'index']);
