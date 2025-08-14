<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
}); 

Route::get('/cursos', function () {
    // agregar los datos de los cursos
    return view('cursos');
});

Route::get('/curso-detalle', function () {
    return view('bartenderprofesional');
});


// Vista para el detalle de un curso específico (parámetro dinámico, por eso se usa GET)
#Route::get('/cursos/{id}', function ($id) {
#    return view('curso-detalle', ['id' => $id]);
#});

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


// Portal del estudiante
Route::get('/student-dashboard', function () {
    return view('student-dashboard');
})->name('student.dashboard');

// Portal del docente
Route::get('/teacher-dashboard', function () {
    return view('teacher-dashboard');
})->name('teacher.dashboard');

// Horarios y calendario
Route::get('/horarios', function () {
    return view('horarios');
});

// Galería de eventos y trabajos
Route::get('/galeria', function () {
    return view('galeria');
});

// Preguntas frecuentes
Route::get('/faq', function () {
    return view('faq');
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
