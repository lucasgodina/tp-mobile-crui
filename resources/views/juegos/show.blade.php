@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Detalles de {{ $juego->nombre }}</h1>
        <p>ID: {{ $juego->id }}</p>
        <p>Nombre: {{ $juego->nombre }}</p>
        <a href="{{ route('juegos.index') }}" title="Volver al listado" class="btn btn-secondary">
            <span class="material-symbols-outlined">arrow_back</span>
        </a>
        <a href="{{ route('juegos.edit', ['juego' => $juego->id]) }}" class="btn btn-primary">Editar</a>
    </div>
@endsection
