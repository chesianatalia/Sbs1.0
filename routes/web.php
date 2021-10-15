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
Route::get('/detail', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
Route::get('/add', [App\Http\Controllers\AddController::class, 'index'])->name('add');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/foodcat', [App\Http\Controllers\FoodcatController::class, 'index'])->name('foodcat');
Route::get('/drinkcat', [App\Http\Controllers\DrinkcatController::class, 'index'])->name('drinkcat');
Route::get('/snackcat', [App\Http\Controllers\SnackcatController::class, 'index'])->name('snackcat');
Route::get('/dessertcat', [App\Http\Controllers\DessertcatController::class, 'index'])->name('dessertcat');
Route::get('/othercat', [App\Http\Controllers\OthercatController::class, 'index'])->name('othercat');


//->middleware(['auth','admin'])
Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
});
Auth::routes();

