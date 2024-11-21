@extends('layouts.app')
@section('content')
    <div>
        <h1 class="text-center mt-4">CREAR JUEGO</h1>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('juegos.store') }}" method="POST" class="col-4 p-4 m-auto">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary">Crear juego</button>
            </div>
            <div class="mb-3">
                <a href="{{ route('juegos.index') }}" title="Volver al listado" class="btn btn-secondary">
                    <span class="material-symbols-outlined">arrow_back</span>
                </a>
            </div>
        </form>
    </div>
@endsection
