<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;


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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth']);
Route::get('/categories/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('categories-detail');
Route::get('/post/{id}', [App\Http\Controllers\HomeController::class, 'detailPost'])->name('post-detail');
Route::get('/favorite', [App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite');
Route::get('/detail', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
Route::get('/add', [App\Http\Controllers\User\UserpostController::class, 'create'])->name('add');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

// Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
// Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store']);
// Route::get('/login', [LoginController::class, 'index'])->name('Login');


//->middleware(['auth','admin'])
Route::prefix('admin')->namespace('Admin')->middleware(['auth','admin'])->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('user', 'UserController');
    Route::resource('post','PostController');
});
Route::prefix('user')->namespace('User')->group(function(){
    // Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
    Route::resource('userpost','UserpostController');
});
Auth::routes();

