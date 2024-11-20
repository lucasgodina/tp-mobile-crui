<div class="container">
    <h1>{{$juego -> nombre}}</h1>
    <a href="{{ route('equipos.edit', ['equipo' => $equipo -> id]) }}" class="btn btn-primary">Editar</a>
</div>