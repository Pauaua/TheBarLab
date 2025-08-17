
@extends('layout')

@section('content')
<style>
    body {
        background-color: #A2845E;
    }

    .register-box {
        background-color: #380516;
        padding: 3rem 2.5rem 2.5rem 2.5rem;
        border-radius: 10px;
        max-width: 420px;
        width: 100%;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        color: #E0E0E0;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 2rem auto 2rem auto;
    }

    .register-box h2 {
        text-align: center;
        margin-bottom: 2rem;
        font-size: 1.3rem;
        font-weight: normal;
    }

    .register-box label {
        align-self: flex-start;
        margin-bottom: 0.3rem;
        margin-top: 0.7rem;
        font-size: 1rem;
    }

    .register-box input {
        width: 100%;
        padding: 0.7rem;
        margin-bottom: 0.7rem;
        margin-top: 0.7rem;
        border: none;
        border-radius: 6px;
        background-color: #E0E0E0;
        color: #02110C;
        font-size: 1rem;
    }

    .register-box button {
        width: 70%;
        margin: 1.2rem auto 0 auto;
        padding: 0.7rem;
        background-color: #15302B;
        color: #E0E0E0;
        border: none;
        border-radius: 20px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: block;
        font-size: 1rem;
    }

    .register-box button:hover {
        background-color: #02110C;
    }

    .register-box .error {
        color: #e74c3c;
        font-size: 0.9rem;
        margin-top: 0.5rem;
        text-align: center;
    }

    @media (max-width: 480px) {
        .register-box {
            padding: 2rem 0.5rem 2rem 0.5rem;
            max-width: 100vw;
            width: 100vw;
            min-width: 0;
            border-radius: 0;
            box-shadow: none;
        }
        .register-box h2 {
            font-size: 1.3rem;
        }
        .register-box label {
            font-size: 1.1rem;
        }
        .register-box input {
            font-size: 1.1rem;
            padding: 1rem;
        }
        .register-box button {
            width: 100%;
            font-size: 1.1rem;
            padding: 1rem;
        }
    }
</style>

<div class="register-box">
    <h2>Regístrate</h2>
    <form id="registerForm">
        <label for="name">Nombre Completo</label>
        <input type="text" id="name" name="name" placeholder="Nombre Completo" required>
        <label for="rut">RUT</label>
        <input type="text" id="rut" name="rut" placeholder="X.XXX.XXX-X" required>
        <label for="birthdate">Fecha de Nacimiento</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <label for="email">Correo</label>
        <input type="email" id="email" name="email" placeholder="ejemplo@correo.cl" required>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Utiliza mayúsculas y números para mayor seguridad." required>
        <div id="error-message" class="error" style="display: none;"></div>
        <button type="submit">ENVIAR</button>
    </form>
</div>

<script>
    document.getElementById('registerForm').addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData(e.target);
        const data = {
            name: formData.get('name'),
            email: formData.get('email'),
            password: formData.get('password')
        };

        // Obtener el token CSRF del meta en el layout
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        try {
            const response = await fetch('/registro', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if (response.ok) {
                localStorage.setItem('token', result.token);
                localStorage.setItem('user', JSON.stringify(result.usuario));
                alert('¡Registro exitoso!');
                window.location.href = '/';
            } else {
                const errorDiv = document.getElementById('error-message');
                errorDiv.style.display = 'block';
                errorDiv.textContent = result.msg || 'Error en el registro';
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Error de conexión con el servidor');
        }
    });
</script>
@endsection