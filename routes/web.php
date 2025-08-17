<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Rutas públicas (Frontend)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('inicio'); // antes tenías 'welcome', reemplazo por tu vista 'inicio'
})->name('inicio');

Route::get('/cursos', fn() => view('cursos'))->name('cursos');
Route::get('/curso-detalle', fn() => view('bartenderprofesional'))->name('curso.detalle');
Route::get('/nosotros', fn() => view('nosotros'))->name('nosotros');
Route::get('/contacto', fn() => view('contacto'))->name('contacto');

/*
|--------------------------------------------------------------------------
| Rutas privadas (requieren autenticación)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    // dashboard de Breeze
    Route::get('/dashboard', fn() => view('dashboard'))
        ->middleware(['verified'])
        ->name('dashboard');

  
    // perfil de usuario (Breeze ya trae controlador ProfileController)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ruta admin protegida
    Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('admin/users', UserController::class)
        ->parameters(['users' => 'user'])
        ->names('admin.users');
    });

    // gestión de usuarios (ejemplo: lista de usuarios)
    Route::get('/usuarios', [UserController::class, 'listView'])->name('usuarios.index');
});

/*
|--------------------------------------------------------------------------
| Rutas de autenticación Breeze
|--------------------------------------------------------------------------
| Breeze instala login, register, logout, forgot password, reset password, etc.
*/
require __DIR__.'/auth.php';

