<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        {{-- Logo al costado izquierdo --}}
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="40" height="40">
            THE BARLAB
        </a>

        {{-- Botón para móviles --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Links al costado derecho --}}
        <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="/cursos">Cursos</a></li>
                <li class="nav-item"><a class="nav-link" href="/contacto">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
