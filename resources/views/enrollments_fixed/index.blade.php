@extends('layout')

@section('content')
<div class="container">
    <h1>Inscripciones (Usuario 2, Curso 2)</h1>
    <a href="{{ route('enrollments-fixed.create') }}" class="btn btn-primary mb-3">Nueva Inscripción</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Curso</th>
                <th>Fecha de Inscripción</th>
                <th>Estado</th>
                <th>Completado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enrollments as $enrollment)
            <tr>
                <td>{{ $enrollment->course ? $enrollment->course->name : 'N/A' }}</td>
                <td>{{ $enrollment->enrollment_date }}</td>
                <td>{{ $enrollment->status }}</td>
                <td>{{ $enrollment->completed_at }}</td>
                <td>
                    <a href="{{ route('enrollments-fixed.show', $enrollment->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('enrollments-fixed.edit', $enrollment->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('enrollments-fixed.destroy', $enrollment->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
