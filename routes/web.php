<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('user.index', [App\Http\Controllers\HomeController::class, 'index'])->name('/user.index');

// Route::get('/user', 'UserController@index')->name('user.index');
// Route::get('/bimbel', 'BimbelController@index')->name('bimbel.index');

Route::resource('user', UserController::class);
// Route::get('/user', [UserController::class])->name('user.index')->middleware('auth:admin');
Route::get('/user.create', [UserController::class, 'create'])->name('/user.create');
Route::post('/user.store', [UserController::class, 'store'])->name('/user.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::resource('bimbel', KelasController::class);
// Route::get('/bimbel', [KelasController::class])->name('bimbel.index')->middleware('auth:user');
Route::get('/bimbel.create', [KelasController::class, 'create'])->name('/bimbel.create');
Route::post('/bimbel.store', [KelasController::class, 'store'])->name('/bimbel.store');
Route::get('/bimbel/{id}/edit', [KelasController::class, 'edit'])->name('bimbel.edit');
Route::put('/bimbel/{id}', [KelasController::class, 'update'])->name('bimbel.update');