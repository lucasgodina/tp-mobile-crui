@extends('layouts.app')
@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <div class="container-sm">
        <div class="col-8 p-4 m-auto">
            <h1 class="text-center">EQUIPOS</h1>
            <div class="container text-center">
                <a href="{{ url('/') }}" class="btn btn-primary">Volver al Inicio</a>
                <a href="{{ route('equipos.create') }}" class="btn btn-primary">Crear Equipo</a>
            </div>
            <table class="table table-hover table-borderless text-center">
                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de fundación</th>
                    <th scope="col">Activo</th>
                    <th scope="col">Victorias</th>
                    <th scope="col">Juego</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($equipos as $equipo)
                    <tr>
                        <td>{{ $equipo->id }}</td>
                        <td>{{ $equipo->nombre }}</td>
                        <td>{{ $equipo->email }}</td>
                        <td>{{ \Carbon\Carbon::parse($equipo->fecha_fundacion)->format('d/m/Y') }}</td>
                        <td>{{ $equipo->activo ? 'Sí' : 'No' }}</td>
                        <td>{{ $equipo->victorias }}</td>
                        <td>{{ $equipo->juego->nombre }}</td>
                        <td>
                            <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info"
                                title="Ver"><span class="material-symbols-outlined">visibility</span></a>
                            {{-- <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning"
                            title="Editar"><span class="material-symbols-outlined">edit</span></a> --}}
                            <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este equipo?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" title="Eliminar"><span
                                        class="material-symbols-outlined">delete</span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection