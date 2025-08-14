@extends('layout')

@section('content')
<div class="container py-4">
    <!-- Encabezado del Curso -->
    <div class="hero-bg p-4 mb-4 rounded-3">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="display-5 fw-bold text-light">Bartender Profesional</h1>
                <p class="fs-5 text-light">Domina el arte de la coctelería profesional</p>
                <div class="d-flex align-items-center mt-3">
                    <img src="{{ asset('assets/bartender1.jpg') }}" alt="Instructor" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                    <div class="ms-3 text-light">
                        <p class="mb-0">Instructor: Carlos Martínez</p>
                        <small>Bartender Senior - 15 años de experiencia</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Información del Curso</h5>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-clock"></i> Duración: 3 meses</li>
                            <li><i class="bi bi-calendar3"></i> Inicio: 1 Sept 2025</li>
                            <li><i class="bi bi-people"></i> Cupos: 20 estudiantes</li>
                        </ul>
                        <div class="progress mb-3" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 75%; background: #380516;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75% Completado</div>
                        </div>
                        <button class="btn w-100" style="background: #380516; color: #e0e0e0;">Continuar Curso</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Módulos del Curso -->
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Módulos del Curso</h5>
                </div>
                <div class="card-body">
                    <div class="accordion" id="modulosAccordion">
                        <!-- Módulo 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#modulo1" style="background: #02110C; color: #e0e0e0;">
                                    Módulo 1: Introducción a la Coctelería
                                </button>
                            </h2>
                            <div id="modulo1" class="accordion-collapse collapse show" data-bs-parent="#modulosAccordion">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="bi bi-play-circle-fill text-success"></i>
                                                Historia de la Coctelería
                                                <span class="badge bg-success ms-2">Completado</span>
                                            </div>
                                            <button class="btn btn-sm" style="background: #380516; color: #e0e0e0;">Ver</button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="bi bi-play-circle"></i>
                                                Herramientas Básicas
                                            </div>
                                            <button class="btn btn-sm" style="background: #380516; color: #e0e0e0;">Comenzar</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Módulo 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo2" style="background: #02110C; color: #e0e0e0;">
                                    Módulo 2: Destilados Base
                                </button>
                            </h2>
                            <div id="modulo2" class="accordion-collapse collapse" data-bs-parent="#modulosAccordion">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="bi bi-lock-fill"></i>
                                                Ron y sus Variedades
                                            </div>
                                            <button class="btn btn-sm" style="background: #02110C; color: #e0e0e0;" disabled>Bloqueado</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Barra Lateral -->
        <div class="col-lg-4">
            <!-- Próxima Clase -->
            <div class="card shadow mb-4">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Próxima Clase</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="display-4 text-danger">15</div>
                            <div class="text-muted">AGO</div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Técnicas de Vertido</h5>
                            <p class="mb-0"><i class="bi bi-clock"></i> 18:00 - 21:00</p>
                            <button class="btn btn-sm mt-2" style="background: #380516; color: #e0e0e0;">
                                <i class="bi bi-camera-video"></i> Unirse
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recursos del Curso -->
            <div class="card shadow">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Recursos</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bi bi-file-pdf"></i> Manual de Técnicas Básicas
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bi bi-file-pdf"></i> Recetario de Cócteles Clásicos
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bi bi-file-pdf"></i> Guía de Cristalería
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
