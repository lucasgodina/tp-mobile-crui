<div class="container">
    <h1>{{$juego -> nombre}}</h1>
    <a href="{{ route('juegos.edit', ['juego' => $juego -> id]) }}" class="btn btn-primary">Editar</a>
</div>