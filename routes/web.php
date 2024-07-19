<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\SdController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SubsController;
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

Route::get('/subs', [SubsController::class, 'subs'])->name('/subs');
Route::get('/subs2', [SubsController::class, 'subs2'])->name('/subs2');
Route::get('/subs3', [SubsController::class, 'subs3'])->name('/subs3');

Route::resource('siswa', SiswaController::class);
Route::get('/siswa.index', [SiswaController::class, 'index'])->name('/siswa.index');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register');

Route::get('/siswa.sd.index', [SdController::class, 'index'])->name('/siswa.sd.index');
Route::get('/siswa.sd.materi', [MateriController::class, 'index'])->name('/siswa.sd.materi');
Route::get('/siswa.sd.matematika', [MateriController::class, 'matematika'])->name('/siswa.sd.matematika');