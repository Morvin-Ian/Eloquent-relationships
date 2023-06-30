<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/users', [UserController::class, 'users'])->name('users');

Route::get('/user/{user}/', [UserController::class, 'user'])->name('user');

Route::get('/role/{role}/', [RoleController::class, 'role'])->name('role');