<div class="container">
    <h1>Equipos</h1>
    <a href="{{ route('equipos.create') }}">Crear Equipo</a>
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha fundación</th>
                <th>Activo</th>
                <th>Juego</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
            <tr>
                <td>{{ $equipo->id }}</td>
                <td>{{ $equipo->nombre }}</td>
                <td>{{ $equipo->email }}</td>
                <td>{{ $equipo->fecha_fundacion }}</td>
                <td>{{ $equipo->activo ? 'Sí' : 'No' }}</td>
                <td>{{ $equipo->juego->nombre }}</td>
                <td>
                    <a href="{{ route('equipos.show', $equipo->id) }}">Ver</a>
                    <a href="{{ route('equipos.edit', $equipo->id) }}">Editar</a>
                    <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>