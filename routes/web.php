<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Users\MainController;
use App\Http\Controllers\Users\ItemsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Main\MainController as Main;

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

Route::get('/', [IndexController::class, 'show'])->middleware('guest');


Auth::routes();

Route::namespace('Main')->prefix('main')->middleware('guest')->group(function() {
    Route::get('/menu', [Main::class, 'show'])->name('menu');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::put('/register', [RegisterController::class, 'create']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'show']);

});

Route::namespace('Users')->prefix('users')->middleware('users')->group(function () {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/additems', [ItemsController::class, 'index'])->name('additems');
    Route::post('/additems', [ItemsController::class, 'store']);
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
