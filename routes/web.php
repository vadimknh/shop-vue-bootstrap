<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', AdminController::class)->name('main.index');
    Route::resource('categories', App\Http\Controllers\CategoryController::class)->names('category');
    Route::resource('tags', App\Http\Controllers\TagController::class)->names('tag');
    Route::resource('colors', App\Http\Controllers\ColorController::class)->names('color'); 
    Route::resource('users', App\Http\Controllers\UserController::class)->names('user');
});
