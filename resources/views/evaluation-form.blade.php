@extends('layout')

@section('content')
<div class="container py-4">
    <!-- Encabezado -->
    <div class="hero-bg p-4 mb-4 rounded-3">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="display-5 fw-bold text-light">Evaluación: Cóctel de Autor</h1>
                <p class="fs-5 text-light">Proyecto Final - Bartender Profesional</p>
            </div>
            <div class="col-md-4 text-md-end">
                <span class="badge bg-warning">Fecha límite: 20 Ago 2025</span>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Formulario de Entrega -->
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Formulario de Entrega</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nombre del Cóctel</label>
                            <input type="text" class="form-control" placeholder="Introduce el nombre de tu creación">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Concepto e Historia</label>
                            <textarea class="form-control" rows="3" placeholder="Describe la inspiración y concepto detrás de tu cóctel"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Destilado Base</label>
                            <select class="form-select">
                                <option>Selecciona el destilado base</option>
                                <option>Ron</option>
                                <option>Gin</option>
                                <option>Vodka</option>
                                <option>Whisky</option>
                                <option>Licor Casero</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ingredientes</label>
                            <div id="ingredientesList">
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="Ingrediente">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" placeholder="Cantidad">
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-sm" style="background: #02110C; color: #e0e0e0;">
                                            <i class="bi bi-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Método de Preparación</label>
                            <textarea class="form-control" rows="4" placeholder="Describe paso a paso cómo preparar el cóctel"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Video Demostrativo</label>
                            <input type="file" class="form-control" accept="video/*">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Fotografía del Cóctel</label>
                            <input type="file" class="form-control" accept="image/*">
                        </div>

                        <button type="submit" class="btn" style="background: #380516; color: #e0e0e0;">
                            Enviar Proyecto
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Rúbrica de Evaluación -->
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header" style="background: #380516; color: #e0e0e0;">
                    <h5 class="mb-0">Rúbrica de Evaluación</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <div class="list-group-item">
                            <h6 class="mb-1">Creatividad e Innovación</h6>
                            <small class="text-muted">25 puntos</small>
                            <ul class="mb-0 mt-2">
                                <li>Originalidad del concepto</li>
                                <li>Uso innovador de ingredientes</li>
                            </ul>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1">Técnica y Ejecución</h6>
                            <small class="text-muted">25 puntos</small>
                            <ul class="mb-0 mt-2">
                                <li>Precisión en las medidas</li>
                                <li>Técnicas de preparación</li>
                            </ul>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1">Presentación Visual</h6>
                            <small class="text-muted">25 puntos</small>
                            <ul class="mb-0 mt-2">
                                <li>Estética del cóctel</li>
                                <li>Calidad de la fotografía</li>
                            </ul>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1">Documentación</h6>
                            <small class="text-muted">25 puntos</small>
                            <ul class="mb-0 mt-2">
                                <li>Claridad en la receta</li>
                                <li>Calidad del video demostrativo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
