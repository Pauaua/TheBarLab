@extends('layout')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Blog de Coctelería</h1>

    <div class="row g-4">
        <!-- Artículo Principal -->
        <div class="col-12 mb-4">
            <div class="card shadow">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/bartender1.jpg') }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="Tendencias en coctelería">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">Tendencias en Coctelería 2025</h2>
                            <p class="card-text">Descubre las últimas tendencias en el mundo de la coctelería. Desde cócteles sostenibles hasta innovaciones en técnicas de preparación...</p>
                            <p class="card-text"><small class="text-muted">Publicado el 13 de agosto de 2025</small></p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Artículos Secundarios -->
        <div class="col-md-4">
            <div class="card h-100 shadow">
                <img src="{{ asset('assets/bartender2.jpg') }}" class="card-img-top" alt="Recetas clásicas">
                <div class="card-body">
                    <h3 class="card-title">Recetas Clásicas Reinventadas</h3>
                    <p class="card-text">Explora nuevas versiones de los cócteles más icónicos...</p>
                    <a href="#" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow">
                <img src="{{ asset('assets/bartender3.jpg') }}" class="card-img-top" alt="Técnicas de garnish">
                <div class="card-body">
                    <h3 class="card-title">Técnicas de Garnish Avanzadas</h3>
                    <p class="card-text">Aprende a decorar tus cócteles como un profesional...</p>
                    <a href="#" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow">
                <img src="{{ asset('assets/bartender4.jpg') }}" class="card-img-top" alt="Cócteles sin alcohol">
                <div class="card-body">
                    <h3 class="card-title">Cócteles Sin Alcohol</h3>
                    <p class="card-text">Descubre el arte de crear mocktails excepcionales...</p>
                    <a href="#" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
