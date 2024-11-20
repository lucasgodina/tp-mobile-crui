<div class="container">
    <h1>Juegos</h1>
    <a href="{{ route('juegos.create') }}">Crear Juego</a>
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($juegos as $juego)
            <tr>
                <td>{{ $juego->id }}</td>
                <td>{{ $juego->nombre }}</td>
                <td>
                    <a href="{{ route('juegos.show', $juego->id) }}">Ver</a>
                    <a href="{{ route('juegos.edit', $juego->id) }}">Editar</a>
                    <form action="{{ route('juegos.destroy', $juego->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
    </table>
</div>