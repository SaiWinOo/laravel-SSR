<?php

use App\Http\Controllers\AuthController;
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

Route::get('/register',[AuthController::class,'register'])->name('auth.register');
Route::get('/login',[AuthController::class,'login'])->name('auth.login');
Route::post('/postRegister',[AuthController::class,'postRegister'])->name('auth.postRegister');
Route::post('/postLogin',[AuthController::class,'postLogin'])->name("auth.postLogin");
Route::post('/logout',[AuthController::class,'logout'])->name('auth.logout');

Route::middleware('auth')->group(function(){
    Route::get('/home',[\App\Http\Controllers\CategoryController::class,'home'])->name('home');
   Route::resource('/category',\App\Http\Controllers\CategoryController::class);
   Route::resource('/posts',\App\Http\Controllers\PostController::class);
});
