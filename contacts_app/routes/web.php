<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

Route::get('/', [SesionController::class, 'create'])->name('login'); 

Route::post('/login', [UserController::class, 'login'])->name('login.post'); 

Route::get('/registrar', [UserController::class, 'registrar'])->name('register');

Route::post('/registrar', [UserController::class, 'registrar'])->name('register.post');

Route::post('/logout', [UserController::class, 'logout'])->name('logout'); 

Route::middleware(['auth'])->group(function () {
    Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');

    Route::resource('contactos', ContactController::class)->names([
        'index' => 'contacts.index',    
        'create' => 'contacts.create',  
        'store' => 'contacts.store',    
        'edit' => 'contacts.edit',      
        'update' => 'contacts.update',  
        'destroy' => 'contacts.destroy'
    ])->except(['show']); 
});

// Rutas de Registro
Route::get('/registro', [RegistroController::class, 'create'])->name('register');
Route::post('/registro', [RegistroController::class, 'store']);

// Rutas de Sesión/Login
Route::post('/login', [SesionController::class, 'store']);
Route::post('/logout', [SesionController::class, 'destroy'])->name('logout');

// Rutas de Contactos (CRUD completo)
Route::resource('contactos', ContactoController::class)->middleware('auth');