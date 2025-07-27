<?php

use Illuminate\Support\Facades\Route;
// En todo lo estático es mejor usar view antes que get, ya que view es más rápido y no requiere lógica adicional. 
// Get es más adecuado para rutas que requieren lógica o parámetros dinámicos.


// Página de bienvenida de la escuela
Route::view('/', 'inicio');

// Página que muestra la lista de cursos
Route::view('/cursos', 'cursos');

// Vista para el detalle de un curso específico (parámetro dinámico, por eso se usa GET)
Route::get('/cursos/{id}', function ($id) {
    return view('curso-detalle', ['id' => $id]);
});

// Página con información sobre la escuela
Route::view('/nosotros', 'nosotros');

// Formulario o información de contacto
Route::view('/contacto', 'contacto');


// Página inicio sesión estática
Route::view('/login', 'auth.login');

// Página de registro de nuevos alumnos estática
Route::view('/registro', 'auth.registro');

// Perfil del alumno
Route::view('/perfil', 'alumno.perfil');
