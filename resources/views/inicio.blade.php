<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>THE BARLAB</title>
</head>
<body>
    <header>
        <h1>THE BARLAB</h1>
        <img src="{{ asset('images/logo.png') }}" alt="Logo"> {{-- Asegúrate de tener esta imagen en public/images --}}
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 THE BARLAB</p>
    </footer>
</body>
</html>
