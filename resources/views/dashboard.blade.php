@extends('layout')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-white mb-5">Panel del Estudiante</h1>
    
    <!-- Progreso General -->
    <div class="row mb-4">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title h4">Tu Progreso</h2>
                    <div class="progress mb-3" style="height: 25px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75% Completado</div>
                    </div>
                    <p class="text-muted">Curso: Bartender Profesional</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Próximas Actividades -->
        <div class="col-md-6">
            <div class="card shadow h-100">
                <div class="card-header bg-dark text-white">
                    <h3 class="h5 mb-0">Próximas Actividades</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Examen: Cócteles Clásicos
                            <span class="badge bg-primary rounded-pill">Mañana</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Entrega: Cóctel de Autor
                            <span class="badge bg-warning rounded-pill">3 días</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Últimas Calificaciones -->
        <div class="col-md-6">
            <div class="card shadow h-100">
                <div class="card-header bg-dark text-white">
                    <h3 class="h5 mb-0">Últimas Calificaciones</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Quiz: Historia de la Coctelería
                            <span class="badge bg-success rounded-pill">95/100</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Práctica: Técnicas de Vertido
                            <span class="badge bg-success rounded-pill">90/100</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Materiales del Curso -->
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h3 class="h5 mb-0">Materiales del Curso</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Manual de Cócteles Clásicos</h6>
                                <small class="text-muted">PDF - Última actualización: 10/08/2025</small>
                            </div>
                            <i class="bi bi-download"></i>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Guía de Cristalería</h6>
                                <small class="text-muted">PDF - Última actualización: 05/08/2025</small>
                            </div>
                            <i class="bi bi-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
