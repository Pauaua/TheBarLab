@extends('layout')

@section('content')
<div class="container py-4">
    <!-- Encabezado del Portal -->
    <div class="hero-bg p-4 mb-4 rounded-3">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="display-5 fw-bold text-light">Portal del Docente</h1>
                <p class="fs-5 text-light">Bienvenido/a, </p>
            </div>
            <div class="col-md-4 text-md-end">
                <button class="btn hero-btn" data-bs-toggle="modal" data-bs-target="#newCourseModal">
                    <i class="bi bi-plus-circle"></i> Crear Nuevo Curso
                </button>
            </div>
        </div>
    </div>

    <!-- Métricas Principales -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card shadow h-100" style="border-left: 4px solid #380516;">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-uppercase mb-1">Cursos Activos</div>
                            <div class="h5 mb-0 fw-bold">3</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-book text-gray-300 fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow h-100" style="border-left: 4px solid #380516;">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-uppercase mb-1">Estudiantes Totales</div>
                            <div class="h5 mb-0 fw-bold">45</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-people text-gray-300 fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow h-100" style="border-left: 4px solid #380516;">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-uppercase mb-1">Tareas Pendientes</div>
                            <div class="h5 mb-0 fw-bold">12</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-clipboard-check text-gray-300 fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow h-100" style="border-left: 4px solid #380516;">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-uppercase mb-1">Promedio de Notas</div>
                            <div class="h5 mb-0 fw-bold">85%</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-graph-up text-gray-300 fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Lista de Cursos -->
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Mis Cursos</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="background: #02110C; color: #e0e0e0;">
                                <tr>
                                    <th>Curso</th>
                                    <th>Estudiantes</th>
                                    <th>Progreso</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bartender Profesional</td>
                                    <td>20</td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                    </td>
                                    <td><span class="badge" style="background: #380516;">Activo</span></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm" style="background: #02110C; color: #e0e0e0;"><i class="bi bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm" style="background: #380516; color: #e0e0e0;"><i class="bi bi-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Más cursos... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Panel Lateral -->
        <div class="col-lg-4">
            <!-- Próximas Evaluaciones -->
            <div class="card shadow mb-4">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Evaluaciones Pendientes</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Cóctel de Autor - Juan Pérez</h6>
                                <small class="text-muted">Hoy</small>
                            </div>
                            <small>Bartender Profesional</small>
                        </a>
                        <!-- Más evaluaciones... -->
                    </div>
                </div>
            </div>

            <!-- Anuncios del Curso -->
            <div class="card shadow">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Anuncios Recientes</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Nuevo material disponible</h6>
                                <small class="text-muted">3 días</small>
                            </div>
                            <p class="mb-1">Se ha agregado nuevo contenido al módulo de destilados.</p>
                        </a>
                        <!-- Más anuncios... -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Nuevo Curso -->
<div class="modal fade" id="newCourseModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background: #380516; color: #e0e0e0;">
                <h5 class="modal-title">Crear Nuevo Curso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nombre del Curso</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Duración (horas)</label>
                        <input type="number" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn" style="background: #380516; color: #e0e0e0;">Crear Curso</button>
            </div>
        </div>
    </div>
</div>
@endsection
