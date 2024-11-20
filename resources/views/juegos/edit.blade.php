<div class="container">
    <h1>Editar Juego</h1>
    <form action="{{ route('juegos.update', ['juego' => $juego -> id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $juego->nombre }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>