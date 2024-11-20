<div class="container">
    <h1>Editar Equipo</h1>
    <form action="{{route('equipos.update', ['equipo' => $equipo->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{$equipo->nombre}}" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{$equipo->email}}">
            <label for="fecha_fundacion">Fecha fundación</label>
            <input type="date" name="fecha_fundacion" id="fecha_fundacion" value="{{$equipo->fecha_fundacion}}">
            <label for="activo">Activo</label>
            <input type="checkbox" name="activo" id="activo" value="{{$equipo->activo}}">
            <label for="victorias">Victorias</label>
            <input type="number" name="victorias" id="victorias" value="{{$equipo->victorias}}">
            <label for="juego_id">Juego</label>
            <select name="juego_id" id="juego_id" value="{{$equipo -> juego_id}}">
                @foreach($juegos as $juego)
                <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>