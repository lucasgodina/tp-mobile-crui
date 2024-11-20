<div>
    <h1>Crear Equipo</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form action="{{ route('equipos.store')}}" method="POST">
            @csrf
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="fecha_fundacion">Fecha fundación</label>
            <input type="date" name="fecha_fundacion" id="fecha_fundacion">
            <label for="activo">Activo</label>
            <input type="checkbox" name="activo" id="activo">
            <label for="victorias">Victorias</label>
            <input type="number" name="victorias" id="victorias">
            <label for="juego_id">Juego</label>
            <select name="juego_id" id="juego_id">
                @foreach($juegos as $juego)
                <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                @endforeach
            </select>
            <button type="submit">Crear</button>
        </form>
    </div>