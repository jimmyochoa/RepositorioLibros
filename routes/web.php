<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/registro', [UserController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registro', [UserController::class, 'registro']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Add your dashboard route here
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
Route::get('/', function () {
    return view('welcome');
});
