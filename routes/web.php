<?php

use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/user/create', [UserController::class, 'create'])
    ->name('user.create');

Route::post('/user', [UserController::class, 'store'])
    ->name('user.store');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])
    ->name('user.edit');

Route::put('/user/{id}', [UserController::class, 'update'])
    ->name('user.update');

Route::delete('/user/{id}', [UserController::class, 'destroy'])
    ->name('user.destroy');

Route::get('/matakuliah', [MatakuliahController::class, 'index'])
    ->name('matakuliah.index');

Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])
    ->name('matakuliah.create');

Route::post('/matakuliah', [MatakuliahController::class, 'store'])
    ->name('matakuliah.store');

Route::get('/matakuliah/{id}/edit', [MatakuliahController::class, 'edit'])
    ->name('matakuliah.edit');

Route::put('/matakuliah/{id}', [MatakuliahController::class, 'update'])
    ->name('matakuliah.update');

Route::delete('/matakuliah/{id}', [MatakuliahController::class, 'destroy'])
    ->name('matakuliah.destroy');
