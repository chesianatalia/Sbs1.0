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



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/favorite', [App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite');
Route::get('/detail/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
Route::get('/add', [App\Http\Controllers\AddController::class, 'index'])->name('add');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Auth::routes();

