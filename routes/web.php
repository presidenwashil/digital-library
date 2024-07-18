<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Livewire\BookLoaned;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('books', [BookController::class, 'index'])
    ->name('books.index');

Route::get('books/{book:slug}', [BookController::class, 'show'])
    ->name('books.show');

Route::get('books/{book:slug}/read', [BookController::class, 'read'])
    ->name('books.read');

Route::get('loaned', BookLoaned::class)
    ->middleware(['auth'])
    ->name('loaned');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
