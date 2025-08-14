@extends('layout')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-white mb-5">Galería de Eventos y Trabajos</h1>

    <!-- Filtros -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="btn-group w-100">
                <button class="btn btn-dark active" data-filter="all">Todos</button>
                <button class="btn btn-dark" data-filter="eventos">Eventos</button>
                <button class="btn btn-dark" data-filter="cocktails">Cócteles</button>
                <button class="btn btn-dark" data-filter="practicas">Prácticas</button>
            </div>
        </div>
    </div>

    <!-- Galería -->
    <div class="row g-4">
        <!-- Evento -->
        <div class="col-md-4">
            <div class="card shadow h-100">
                <img src="{{ asset('assets/bartender1.jpg') }}" class="card-img-top" alt="Evento de coctelería">
                <div class="card-body">
                    <h5 class="card-title">Masterclass de Coctelería Molecular</h5>
                    <p class="card-text">Nuestros alumnos aprendiendo técnicas avanzadas de coctelería molecular con expertos internacionales.</p>
                    <small class="text-muted">Agosto 2025</small>
                </div>
            </div>
        </div>

        <!-- Cóctel -->
        <div class="col-md-4">
            <div class="card shadow h-100">
                <img src="{{ asset('assets/bartender2.jpg') }}" class="card-img-top" alt="Cóctel de graduación">
                <div class="card-body">
                    <h5 class="card-title">Cóctel Ganador - Graduación 2025</h5>
                    <p class="card-text">Creación original de nuestro alumno destacado en la ceremonia de graduación.</p>
                    <small class="text-muted">Julio 2025</small>
                </div>
            </div>
        </div>

        <!-- Práctica -->
        <div class="col-md-4">
            <div class="card shadow h-100">
                <img src="{{ asset('assets/bartender3.jpg') }}" class="card-img-top" alt="Práctica de flair">
                <div class="card-body">
                    <h5 class="card-title">Clase de Flair Bartending</h5>
                    <p class="card-text">Sesión práctica de técnicas de flair con nuestros estudiantes avanzados.</p>
                    <small class="text-muted">Junio 2025</small>
                </div>
            </div>
        </div>

        <!-- Más imágenes... -->
        <div class="col-md-4">
            <div class="card shadow h-100">
                <img src="{{ asset('assets/bartender4.jpg') }}" class="card-img-top" alt="Preparación de cócteles">
                <div class="card-body">
                    <h5 class="card-title">Taller de Garnish</h5>
                    <p class="card-text">Estudiantes aprendiendo técnicas avanzadas de decoración de cócteles.</p>
                    <small class="text-muted">Mayo 2025</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100">
                <img src="{{ asset('assets/bartender5.jpg') }}" class="card-img-top" alt="Evento especial">
                <div class="card-body">
                    <h5 class="card-title">Competencia Interna</h5>
                    <p class="card-text">Final de la competencia de coctelería entre estudiantes.</p>
                    <small class="text-muted">Abril 2025</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100">
                <img src="{{ asset('assets/bartender6.png') }}" class="card-img-top" alt="Práctica de coctelería">
                <div class="card-body">
                    <h5 class="card-title">Clase Magistral de Gin</h5>
                    <p class="card-text">Sesión especializada sobre la historia y preparación de cócteles con gin.</p>
                    <small class="text-muted">Marzo 2025</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script para filtros -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('[data-filter]');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remover clase active de todos los botones
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Agregar clase active al botón clickeado
            this.classList.add('active');
            
            // Aquí iría la lógica de filtrado
            const filterValue = this.getAttribute('data-filter');
            // Implementar la lógica de filtrado según necesidad
        });
    });
});
</script>
@endsection
