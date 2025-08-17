

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EnrollmentFixedController;
use App\Http\Controllers\EnrollmentsController;

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


// CRUD de inscripciones fijas para user_id=2 y course_id=2
Route::resource('enrollments-fixed', EnrollmentFixedController::class);

// CRUD de courses
Route::resource('courses', CoursesController::class);

// Ruta /cursos muestra la vista personalizada cursos.blade.php
Route::get('/cursos', function () {
    return view('cursos');
})->name('cursos');




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
  
    
    // CRUD de inscripciones (solo para alumnos autenticados)
    Route::middleware(['auth'])->group(function () {
    Route::resource('enrollments', EnrollmentsController::class)->except(['edit', 'update']);
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


