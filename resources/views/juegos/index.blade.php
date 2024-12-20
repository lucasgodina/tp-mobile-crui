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
            <h1 class="text-center">JUEGOS</h1>
            <div class="container text-center">
                <a href="{{ url('/') }}" class="btn btn-primary">Volver al Inicio</a>
                <a href="{{ route('juegos.create') }}" class="btn btn-primary">Crear Juego</a>
            </div>
            <table class="table table-hover table-borderless text-center">
                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($juegos as $juego) {{-- Recorremos los juegos --}}
                    <tr>
                        <td>{{ $juego->id }}</td>
                        <td>{{ $juego->nombre }}</td>
                        <td>
                            <a href="{{ route('juegos.show', $juego->id) }}" class="btn btn-info" title="Ver"><span
                                    class="material-symbols-outlined">visibility</span></a>
                            {{-- <a href="{{ route('juegos.edit', $juego->id) }}" class="btn btn-warning" title="Editar"><span
                                class="material-symbols-outlined">edit</span></a> --}}
                            <form action="{{ route('juegos.destroy', $juego->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este juego?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" title="Eliminar"><span
                                        class="material-symbols-outlined">delete</span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>
@endsection