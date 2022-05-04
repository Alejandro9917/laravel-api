<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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

Route::get('books',  [BookController::class, 'books'])->name('books.all');
Route::get('books/author/{id}',  [BookController::class, 'booksByAuthor'])->name('books.byAuthor');
Route::post('books',  [BookController::class, 'store']);

Route::get('authors',  [AuthorController::class, 'authors'])->name('authors.all');
