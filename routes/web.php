<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;

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

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/publishers', [PublisherController::class, 'index']);

Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/', function () {
    return redirect('/books');
});
