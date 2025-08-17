

<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CoursesController;

use App\Http\Controllers\EnrollmentFixedController;
// CRUD de inscripciones fijas para user_id=2 y course_id=2
Route::resource('enrollments-fixed', EnrollmentFixedController::class);


Route::get('/', function () {
    return view('inicio');
}); 

use App\Http\Controllers\EnrollmentsController;
// CRUD de inscripciones (solo para alumnos autenticados)
Route::middleware(['auth'])->group(function () {
    Route::resource('enrollments', EnrollmentsController::class)->except(['edit', 'update']);
});

// CRUD de courses
Route::resource('courses', CoursesController::class);

// Ruta /cursos muestra la vista personalizada cursos.blade.php
Route::get('/cursos', function () {
    return view('cursos');
})->name('cursos');

Route::get('/curso-detalle', function () {
    return view('bartenderprofesional');
});


// Vista para el detalle de un curso específico (parámetro dinámico, por eso se usa GET)
#Route::get('/cursos/{id}', function ($id) {
#    return view('curso-detalle', ['id' => $id]);
#});

// Pagina para Cursos

// Página con información sobre la escuela
Route::get('/nosotros', function () {
    return view('nosotros');
});

// Formulario o información de contacto
Route::get('/contacto', function () {
    return view('contacto');
});


// Página inicio sesión estática
Route::get('/login', function () {
    return view('auth.login');
});
// Post para el login
Route::post('/login', function () {
    // falta: lógica de autenticación
    return redirect('/'); // Redirigir a la página principal después del login
});

// Página de registro de nuevos alumnos estática
Route::get('/registro', function () {
    return view('auth.registro');
});
// Post para el registro 
Route::post('/registro', function () {
    // falta: lógica de registro
    return redirect('/login'); // Redirigir al login después del registro
});

// Perfil del alumno
Route::get('/perfil', function () {
    return view('alumno.perfil');
});
