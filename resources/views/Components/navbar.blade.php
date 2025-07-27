<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('assets/logo5.png') }}" alt="Logo The Bar Lab" style="height: 48px;" class="me-2">
                <span>The Bar Lab</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCursos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownCursos">
                            <li><a class="dropdown-item" href="/bartenderprofesional">Bartender Profesional</a></li>
                            <li><a class="dropdown-item" href="/cursos/barista">Curso Barista</a></li>
                            <li><a class="dropdown-item" href="/cursos/fermentacion">Curso de Fermentación</a></li>
                            <li><a class="dropdown-item" href="/cursos/destilacion">Curso de Destilación</a></li>
                            <li><a class="dropdown-item" href="/cursos/bartender-mixologia">Bartender Profesional</a></li>
                            <li><a class="dropdown-item" href="/cursos/cerveza">Especialización en Cerveza</a></li>
                            <li><a class="dropdown-item" href="/cursos/mixologia">Master en Mixología</a></li>
                            <li><a class="dropdown-item" href="/cursos/bar-foodie">Bar Foodie</a></li>
                            <li><a class="dropdown-item" href="/cursos/vinos">Curso Inicial de Vinos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/registro">Regístrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Inicia sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>