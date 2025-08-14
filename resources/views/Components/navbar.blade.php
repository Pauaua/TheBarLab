<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('assets/logo5.png') }}" alt="Logo The Bar Lab" style="height: 48px;" class="me-2">
                <span>The Bar Lab</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                   <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/nosotros">¿Quiénes Somos? </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/cursos" id="navbarDropdownCursos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownCursos">
                            <li><a class="dropdown-item" href="/cursos">Cursos</a></li>
                            <li><a class="dropdown-item" href="/curso-detalle">Bartender Profesional</a></li>
                            <li><a class="dropdown-item" href="/horarios">Horarios y Calendario</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/galeria">Galería</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/faq">FAQ</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/contacto">Contacto</a>
                    </li>
                    
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('teacher.dashboard') }}">
                                    <i class="bi bi-mortarboard-fill"></i> Portal Docente
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('student.dashboard') }}">
                                    <i class="bi bi-person-workspace"></i> Mi Portal
                                </a>
                            </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> USUARIO
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownUser">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Configuración</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bi bi-box-arrow-right"></i> Cerrar Sesión
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">
                                <i class="bi bi-box-arrow-in-right"></i> Inicia sesión
                            </a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>