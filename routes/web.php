<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request;

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Home');
    });

    Route::get('/threads', [ThreadController::class, 'index']);

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{user}', [UserController::class, 'show']);
    Route::get('/users/create', [UserController::class, 'create'])->can('create', 'App\Model\User');
    Route::post('/users', [UserController::class, 'store']);

    Route::get('/settings', function () {
        return Inertia::render('Settings');
    });
});
