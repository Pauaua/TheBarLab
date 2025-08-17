
@extends('layout')

@section('content')
<div class="container" style="margin-top:2rem;">
    <h2>Lista de Usuarios</h2>
    <table style="width:100%; border-collapse:collapse; margin-top:1rem;">
        <thead>
            <tr style="background:#380516; color:#E0E0E0;">
                <th style="padding:0.5rem;">ID</th>
                <th style="padding:0.5rem;">Nombre</th>
                <th style="padding:0.5rem;">Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr style="background:#E0E0E0; color:#02110C;">
                <td style="padding:0.5rem;">{{ $user->id }}</td>
                <td style="padding:0.5rem;">{{ $user->name }}</td>
                <td style="padding:0.5rem;">{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection