@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Detalles de {{ $equipo->nombre }}</h1>
    <p>ID: {{ $equipo->id }}</p>
    <p>Nombre: {{ $equipo->nombre }}</p>
    <p>Email: {{ $equipo->email }}</p>
    <p>Fecha de fundación: {{ \Carbon\Carbon::parse($equipo->fecha_fundacion)->format('d-m-Y') }}</p>
    <p>Activo: {{ $equipo->activo ? 'Si' : 'No' }}</p>
    <p>Victorias: {{ $equipo->victorias }}</p>
    <p>Juego: {{ $equipo->juego->nombre }}</p>
    <a href="{{ route('equipos.index') }}" title="Volver al listado" class="btn btn-secondary">
        <span class="material-symbols-outlined">arrow_back</span>
    </a>
    <a href="{{ route('equipos.edit', ['equipo' => $equipo->id]) }}" class="btn btn-primary">Editar</a>
</div>
@endsection