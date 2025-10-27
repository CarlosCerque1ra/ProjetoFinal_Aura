<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pag-init/index');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

