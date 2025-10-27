<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pag-init/index');
});
Route::get('/mural', [UserController::class, 'index'])->name('mural.index');
Route::get('/documento_estagio', [UserController::class, 'documento_estagio'])->name('documento_estagio.index');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

