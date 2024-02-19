<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

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


Route::middleware(['auth'])->group(function () {
    Route::get('/mybooks', [BookController::class, 'index'])->name('mybooks.index');
    Route::get('/mybooks/create', [BookController::class, 'create'])->name('mybooks.create');
    Route::post('/mybooks', [BookController::class, 'store'])->name('mybooks.store');
    Route::get('/mybooks/{book}/edit', [BookController::class, 'edit'])->name('mybooks.edit');
    Route::put('/mybooks/{book}', [BookController::class, 'update'])->name('mybooks.update');
    Route::delete('/mybooks/{book}', [BookController::class, 'destroy'])->name('mybooks.destroy');
});
Route::get('/', [BookController::class, 'landing'])->name('landing');
Route::get('/{id}', [BookController::class, 'show'])->name('show_libro');
Route::post('books/{id}/add-comment', [BookController::class, 'addComment'])->name('books.addComment');
Route::delete('/books/{bookId}/comments/{commentId}', [BookController::class, 'deleteComment'])->name('books.deleteComment');
