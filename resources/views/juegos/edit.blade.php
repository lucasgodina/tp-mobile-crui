@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center mt-4">EDITAR JUEGO</h1>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('juegos.update', ['juego' => $juego->id]) }}" method="POST" class="col-4 p-4 m-auto">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label" for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $juego->nombre }}"
                    required>
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            <div class="mb-3">
                <a href="{{ route('juegos.index') }}" title="Volver al listado" class="btn btn-secondary">
                    <span class="material-symbols-outlined">arrow_back</span>
                </a>
            </div>

        </form>
    </div>
@endsection
