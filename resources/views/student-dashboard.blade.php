@extends('layout')

@section('content')
<div class="container py-4">
    <!-- Encabezado del Portal -->
    <div class="hero-bg p-4 mb-4 rounded-3">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="display-5 fw-bold text-light">Mi Portal de Aprendizaje</h1>
                <p class="fs-5 text-light">¡Bienvenido/a de vuelta, ESTUDIANTE!</p>
            </div>
            <div class="col-md-4 text-md-end">
                <div class="d-flex align-items-center justify-content-end">
                    <div class="me-3">
                        <span class="badge bg-light text-dark p-2">
                            <i class="bi bi-star-fill text-warning"></i> Nivel: Intermedio
                        </span>
                    </div>
                    <div>
                        <span class="badge bg-light text-dark p-2">
                            <i class="bi bi-trophy-fill text-warning"></i> 450 XP
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Columna Principal -->
        <div class="col-lg-8">
            <!-- Próxima Clase -->
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Próxima Clase</h5>
                    <button class="btn btn-sm" style="background: #02110C; color: #e0e0e0;">
                        <i class="bi bi-calendar-check"></i> Ver Calendario
                    </button>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <div class="display-4 text-danger">15</div>
                            <div class="text-muted">Agosto</div>
                        </div>
                        <div class="col-md-7">
                            <h5>Técnicas Avanzadas de Coctelería</h5>
                            <p class="mb-0"><i class="bi bi-clock"></i> 18:00 - 21:00</p>
                            <p class="mb-0"><i class="bi bi-person-video3"></i> Prof. Carlos Martínez</p>
                        </div>
                        <div class="col-md-3 text-end">
                            <button class="btn" style="background: #380516; color: #e0e0e0;">
                                <i class="bi bi-camera-video"></i> Unirse
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mis Cursos en Progreso -->
            <div class="card shadow mb-4">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Mis Cursos en Progreso</h5>
                </div>
                <div class="card-body">
                    <!-- Curso 1 -->
                    <div class="mb-4 pb-3 border-bottom">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5>Bartender Profesional</h5>
                                <div class="progress mb-2" style="height: 20px;">
                                    <div class="progress-bar" role="progressbar" style="width: 75%; background: #380516;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                                <small class="text-muted">Último acceso: Ayer</small>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="#" class="btn" style="background: #02110C; color: #e0e0e0;">Continuar</a>
                            </div>
                        </div>
                    </div>
                    <!-- Más cursos... -->
                </div>
            </div>

            <!-- Próximas Evaluaciones -->
            <div class="card shadow">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Próximas Evaluaciones</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead style="background: #02110C; color: #e0e0e0;">
                                <tr>
                                    <th>Evaluación</th>
                                    <th>Curso</th>
                                    <th>Fecha Límite</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Proyecto: Cóctel de Autor</td>
                                    <td>Bartender Profesional</td>
                                    <td>20 Ago 2025</td>
                                    <td><span class="badge bg-warning">Pendiente</span></td>
                                </tr>
                                <!-- Más evaluaciones... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna Lateral -->
        <div class="col-lg-4">
            <!-- Progreso y Logros -->
            <div class="card shadow mb-4">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Mis Logros</h5>
                </div>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-4 text-center">
                            <div class="badge-achievement p-2">
                                <i class="bi bi-award text-warning fs-2"></i>
                                <div class="small">Experto en Gin</div>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="badge-achievement p-2">
                                <i class="bi bi-trophy text-warning fs-2"></i>
                                <div class="small">Maestro del Shaker</div>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="badge-achievement p-2">
                                <i class="bi bi-stars text-warning fs-2"></i>
                                <div class="small">Innovador</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recursos Recomendados -->
            <div class="card shadow mb-4">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Recursos Recomendados</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Guía de Cristalería</h6>
                                <small><i class="bi bi-file-pdf"></i></small>
                            </div>
                            <small class="text-muted">PDF - 2.5MB</small>
                        </a>
                        <!-- Más recursos... -->
                    </div>
                </div>
            </div>

            <!-- Anuncios -->
            <div class="card shadow">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Anuncios Importantes</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Masterclass Especial</h6>
                                <small class="text-muted">Hoy</small>
                            </div>
                            <p class="mb-1">No te pierdas la masterclass de coctelería molecular este viernes.</p>
                        </a>
                        <!-- Más anuncios... -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
