@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="container-sm">
            <div class="col-8 p-4 m-auto">
                <h1 class="text-center">EQUIPOS</h1>
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
                                <td>{{ $equipo->fecha_fundacion }}</td>
                                <td>{{ $equipo->activo ? 'Sí' : 'No' }}</td>
                                <td>{{ $equipo->victorias }}</td>
                                <td>{{ $equipo->juego->nombre }}</td>
                                <td>
                                    <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info"
                                        title="Ver"><span class="material-symbols-outlined">visibility</span></a>
                                    {{-- <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning"
                                        title="Editar"><span class="material-symbols-outlined">edit</span></a> --}}
                                    <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST">
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
            <div class="container text-center">
                <a href="{{ route('equipos.create') }}" class="btn btn-primary">Crear Equipo</a>
            </div>
        </div>
    </div>
@endsection
