<?php

use Illuminate\Support\Facades\Route;

// Página de bienvenida de la escuela
Route::view('/', 'inicio');

// Página que muestra la lista de cursos
Route::view('/cursos', 'cursos');

// Vista para el detalle de un curso específico (parámetro dinámico)
Route::get('/cursos/{id}', function ($id) {
    return view('curso-detalle', ['id' => $id]);
});

// Página con información sobre la escuela
Route::view('/nosotros', 'nosotros');

// Formulario o información de contacto
Route::view('/contacto', 'contacto');

// Página de inicio de sesión
Route::view('/login', 'auth.login');

// Página de registro de nuevos alumnos
Route::view('/registro', 'auth.registro');

// Perfil del alumno
Route::view('/perfil', 'alumno.perfil');
