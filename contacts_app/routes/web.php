<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\RegistroController;

Route::get('/', [SesionController::class, 'showLoginForm'])->name('login'); 

Route::post('/login', [SesionController::class, 'login'])->name('login.post'); 
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');

Route::get('/registrar', [UserController::class, 'index'])->name('register');

Route::post('/registrar', [RegistroController::class, 'store'])->name('registrar.post');

Route::post('/logout', [SesionController::class, 'logout'])->name('logout'); 

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

// Rutas de Contactos (CRUD completo)
Route::resource('contactos', ContactoController::class)->middleware('auth');