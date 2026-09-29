<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');