<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/user/create', [UserController::class, 'create'])
    ->name('user.create');

Route::post('/user', [UserController::class, 'store'])
    ->name('user.store');

Route::get('/matakuliah', [MatakuliahController::class, 'index'])
    ->name('matakuliah.index');

Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])
    ->name('matakuliah.create');

Route::post('/matakuliah', [MatakuliahController::class, 'store'])
    ->name('matakuliah.store');