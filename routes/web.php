<?php

use App\Http\Controllers\HomeConstroller;
use App\Http\Controllers\UserConstroller;
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

Route::get('/', HomeConstroller::class)->name('home');


Route::controller(UserConstroller::class)->group(function () {
    Route::get('users', 'index')->name('users.index');
    Route::get('users/create', 'create')->name('users.create');
    Route::post('users', 'store')->name('users.store');
    Route::get('users/{user}', 'show')->name('users.show');
    Route::get('users/{user}/edit', 'edit')->name('users.edit');
    Route::put('users/{user}', 'update')->name('users.update');
    Route::delete('users({user}', 'destroy')->name('users.destroy');
});
