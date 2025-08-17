@extends('layout')

@section('content')
<div class="container">
    <h1>Nueva Inscripción (Usuario 2, Curso 2)</h1>
    <form action="{{ route('enrollments-fixed.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="enrollment_date" class="form-label">Fecha de Inscripción</label>
            <input type="date" name="enrollment_date" id="enrollment_date" class="form-control" value="{{ old('enrollment_date', date('Y-m-d')) }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Estado</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ old('status', 'en curso') }}" required>
        </div>
        <div class="mb-3">
            <label for="completed_at" class="form-label">Completado</label>
            <input type="datetime-local" name="completed_at" id="completed_at" class="form-control" value="{{ old('completed_at') }}">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('enrollments-fixed.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
