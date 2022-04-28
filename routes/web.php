<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserController;
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

// rotta catch all per home
Route::get('/', function () {
    return inertia('Home');
})->name('home');

Route::get('/post', function(){
    return inertia('Post');
});

Route::get('/contact', function(){
    return inertia('Contact');
});

// Rotte per login e registrazione
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');
Route::get('/register', [LoginController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store']);

// rotta per dashboard
Route::get('/dashboard', [AdminController::class, 'index'])->prefix('admin')->middleware('auth')->name('dashboard');
