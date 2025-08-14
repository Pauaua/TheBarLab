@extends('layout')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Horarios y Calendario de Cursos</h1>
    
    <!-- Calendario Mensual -->
    <div class="card mb-5 shadow">
        <div class="card-body">
            <h2 class="card-title mb-4">Próximos Cursos</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Curso</th>
                            <th>Fecha de Inicio</th>
                            <th>Horario</th>
                            <th>Duración</th>
                            <th>Cupos</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bartender Profesional</td>
                            <td>15 de Septiembre 2025</td>
                            <td>Lunes a Viernes 18:00-21:00</td>
                            <td>3 meses</td>
                            <td>5 disponibles</td>
                            <td><a href="/curso-detalle" class="btn btn-sm btn-primary">Más Info</a></td>
                        </tr>
                        <!-- Agregar más cursos aquí -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Horarios Regulares -->
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h3 class="card-title">Horarios Turno Mañana</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Lunes a Viernes: 9:00 - 12:00</li>
                        <li class="list-group-item">Sábados: 10:00 - 13:00</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h3 class="card-title">Horarios Turno Tarde</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Lunes a Viernes: 18:00 - 21:00</li>
                        <li class="list-group-item">Sábados: 15:00 - 18:00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
