@extends('layouts.app')
@section('content')
<div>
    <h1 class="text-center mt-4">CREAR EQUIPO</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('equipos.store') }}" method="POST" class="col-4 p-4 m-auto">
        @csrf
        <div class="mb-3">

        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
        </div>
        <div class="mb-3">
            <label for="fecha_fundacion" class="form-label">Fecha fundación</label>
            <input type="date" name="fecha_fundacion" id="fecha_fundacion" class="form-control" value="{{old('fecha_fundacion')}}">
        </div>
        <div class="mb-3">
            <label for="activo" class="form-check-label">Activo</label>
            <input type="checkbox" name="activo" id="activo" class="form-check-input" value="1" {{ old('activo') ? 'checked' : '' }}>
        </div>
        <div class="mb-3">
            <label for="victorias" class="form-label">Victorias</label>
            <input type="number" name="victorias" id="victorias" class="form-control" value="{{old('victorias')}}">
        </div>
        <div class="mb-3">
            <label for="juego_id" class="form-label">Juego</label>
            <select name="juego_id" id="juego_id" class="form-select">
                @foreach ($juegos as $juego)
                <option value="{{ $juego->id }}" {{ old('juego_id') == $juego->id ? 'selected' : '' }}>{{ $juego->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <button type="submit" class="btn btn-primary">Crear equipo</button>
        </div>
        <div class="mb-3">
            <a href="{{ route('equipos.index') }}" title="Volver al listado" class="btn btn-secondary">
                <span class="material-symbols-outlined">arrow_back</span>
            </a>
        </div>

    </form>
</div>
@endsection