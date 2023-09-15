<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);

Route::resource('/category', CategoryController::class);

Route::controller(AuthController::class)->group(function() {
  Route::get('/register', 'register')->name('register');
  Route::post('/store', 'store')->name('store');
  Route::get('/login', 'login')->name('login');
  Route::post('/authenticate', 'authenticate')->name('authenticate');
  Route::post('/logout', 'logout')->name('logout');

  Route::get('/admin/dashboard', 'dashboard');
});