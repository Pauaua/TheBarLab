@extends('layout')

@section('content')
<div class="container py-4">
    <!-- Encabezado -->
    <div class="hero-bg p-4 mb-4 rounded-3">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="display-5 fw-bold text-light">Panel de Administración</h1>
                <p class="fs-5 text-light">Control total del sistema</p>
            </div>
            <div class="col-md-4 text-md-end">
                <button class="btn hero-btn" data-bs-toggle="modal" data-bs-target="#configModal">
                    <i class="bi bi-gear-fill"></i> Configuración
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
                            <div class="text-xs fw-bold text-uppercase mb-1">Total Estudiantes</div>
                            <div class="h5 mb-0 fw-bold">350</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-people-fill text-gray-300 fs-2"></i>
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
                            <div class="text-xs fw-bold text-uppercase mb-1">Instructores</div>
                            <div class="h5 mb-0 fw-bold">12</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-person-video3 text-gray-300 fs-2"></i>
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
                            <div class="text-xs fw-bold text-uppercase mb-1">Cursos Activos</div>
                            <div class="h5 mb-0 fw-bold">8</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-book-fill text-gray-300 fs-2"></i>
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
                            <div class="text-xs fw-bold text-uppercase mb-1">Ingresos Mensuales</div>
                            <div class="h5 mb-0 fw-bold">$15,240</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-currency-dollar text-gray-300 fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Gestión de Usuarios -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Gestión de Usuarios</h5>
                    <button class="btn btn-sm" style="background: #02110C; color: #e0e0e0;">
                        <i class="bi bi-person-plus-fill"></i> Nuevo Usuario
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="background: #02110C; color: #e0e0e0;">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th>Último Acceso</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/bartender1.jpg') }}" class="rounded-circle me-2" style="width: 32px; height: 32px;">
                                            <div>
                                                <div>Carlos Martínez</div>
                                                <small class="text-muted">carlos@mail.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">Instructor</span></td>
                                    <td><span class="badge bg-success">Activo</span></td>
                                    <td>Hace 2 horas</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm" style="background: #380516; color: #e0e0e0;">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Más usuarios... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Gestión de Cursos -->
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Gestión de Cursos</h5>
                    <button class="btn btn-sm" style="background: #02110C; color: #e0e0e0;">
                        <i class="bi bi-plus-circle"></i> Nuevo Curso
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="background: #02110C; color: #e0e0e0;">
                                <tr>
                                    <th>Curso</th>
                                    <th>Instructor</th>
                                    <th>Estudiantes</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bartender Profesional</td>
                                    <td>Carlos Martínez</td>
                                    <td>20/25</td>
                                    <td><span class="badge bg-success">Activo</span></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm" style="background: #380516; color: #e0e0e0;">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm" style="background: #02110C; color: #e0e0e0;">
                                                <i class="bi bi-eye"></i>
                                            </button>
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
            <!-- Análisis Rápido -->
            <div class="card shadow mb-4">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Análisis Rápido</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h6>Tasa de Finalización de Cursos</h6>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 85%; background: #380516;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h6>Satisfacción del Estudiante</h6>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 92%; background: #380516;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">92%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notificaciones del Sistema -->
            <div class="card shadow">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Notificaciones del Sistema</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">Nuevo instructor registrado</h6>
                                <small>3 min</small>
                            </div>
                            <p class="mb-1">Se requiere aprobación para la cuenta.</p>
                        </a>
                        <!-- Más notificaciones... -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Configuración -->
<div class="modal fade" id="configModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background: #380516; color: #e0e0e0;">
                <h5 class="modal-title">Configuración del Sistema</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nombre de la Institución</label>
                    <input type="text" class="form-control" value="The Bar Lab">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email de Contacto</label>
                    <input type="email" class="form-control" value="contacto@thebarlab.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Límite de Estudiantes por Curso</label>
                    <input type="number" class="form-control" value="25">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn" style="background: #380516; color: #e0e0e0;">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>
@endsection
