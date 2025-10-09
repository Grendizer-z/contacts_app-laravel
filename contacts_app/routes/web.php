<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\RegistroController;

Route::get('/', [SesionController::class, 'showLoginForm'])->name('login'); 

Route::post('/login', [SesionController::class, 'login'])->name('login.post'); 
Route::resource('contacts', ContactController::class)->names([
    'index' => 'contacts',
])->middleware('auth');

Route::get('/registrar', [UserController::class, 'index'])->name('register');

Route::post('/registrar', [UserController::class, 'registrar'])->name('registrar');

Route::post('/logout', [SesionController::class, 'logout'])->name('logout'); 
