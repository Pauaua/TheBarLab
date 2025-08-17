@extends('layout')

@section('content')
<div class="container">
    <h1>Editar Inscripción (Usuario 2, Curso 2)</h1>
    <form action="{{ route('enrollments-fixed.update', $enrollment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="enrollment_date" class="form-label">Fecha de Inscripción</label>
            <input type="date" name="enrollment_date" id="enrollment_date" class="form-control" value="{{ old('enrollment_date', $enrollment->enrollment_date) }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Estado</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ old('status', $enrollment->status) }}" required>
        </div>
        <div class="mb-3">
            <label for="completed_at" class="form-label">Completado</label>
            <input type="datetime-local" name="completed_at" id="completed_at" class="form-control" value="{{ old('completed_at', $enrollment->completed_at) }}">
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('enrollments-fixed.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
