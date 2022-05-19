<?php

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



Route::get('/', [App\Http\Controllers\EventsController::class, 'index'])->name('welcome');

Route::post('/book', [App\Http\Controllers\EventsController::class, 'book'])->name('book-event');

Route::get('/signin', [App\Http\Controllers\EventsController::class, 'signin_page'])->name('signin');

Route::get('/success', [App\Http\Controllers\EventsController::class, 'success_page'])->name('success');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
