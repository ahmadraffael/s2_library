<?php

use App\Http\Controllers\BooksController;
use App\Models\Books;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', [BooksController::class, 'index'])->name('books.index');

// Route::resource('books', BooksController::class);

// Route::get('/', function () {
//     $books = Books::all();
//     return view('dashboard.index', compact('books'));
// })->name('dashboard');

// Route::get('/', function (){
//     return view('dashboard.index');
// })->name('dashboard');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::prefix('books')->group(function () {
    Route::get('/create', [BooksController::class, 'create'])->name('books.create');
    Route::get('/detail', [BooksController::class, 'show'])->name('books.show');
    Route::get('/user', [BooksController::class, 'user'])->name('books.user');
    Route::get('/report', [BooksController::class, 'report'])->name('books.report');
    Route::get('/setting', [BooksController::class, 'setting'])->name('books.setting');
    Route::get('/dashboard', [BooksController::class, 'dashboard'])->name('books.dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
