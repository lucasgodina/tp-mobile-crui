<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Juego;

class EquipoController extends Controller
{

    /**
     * Muestra la vista principal con todos los registros.
     */
    public function index()
    {
        // Obtener todos los registros
        $equipos = Equipo::all();

        return view('equipos.index', compact('equipos'));
    }

    // FUNCIONES CRUD
    /**
     * Muestra la vista de creación de un nuevo registro.
     */
    public function create()
    {
        $juegos = Juego::all();

        // Si no hay juegos disponibles, redirigir a la vista index

        if ($juegos->isEmpty()) {
            return redirect()->route('equipos.index')->with('error', 'No se puede crear un equipo porque no hay juegos disponibles.');
        }

        // Crear un nuevo registro

        return view('equipos.create', compact('juegos'));
    }

    /**
     * Guarda el nuevo registro en el almacenamiento.
     */
    public function store(Request $request)
    {

        // Convertir el campo 'activo' a booleano
        $request->merge(['activo' => $request->has('activo')]);

        // Validar los datos
        $request->validate(
            [
                'nombre' => 'required|string|max:255',
                'email' => 'required|email',
                'fecha_fundacion' => 'required|date',
                'activo' => 'required|boolean',
                'victorias' => 'required|integer',
                'juego_id' => 'nullable|exists:juegos,id',
            ],
            [
                // Mensaje si el campo 'juego_id' no existe
                'juego_id.exists' => 'El juego seleccionado no existe.',
            ]
        );

        // Crear un nuevo registro
        Equipo::create($request->all());

        // Redireccionar a la vista index
        return redirect()->route('equipos.index')->with('success', 'Equipo creado correctamente.');
    }

    /**
     * Muestra el registro especificado.
     */
    public function show(Equipo $equipo)
    {
        return view('equipos.show', compact('equipo'));
    }

    /**
     * Muestra la vista para editar el registro especificado.
     */
    public function edit($id)
    {
        $juegos = Juego::all();
        // Buscar el registro
        $equipo = Equipo::findOrFail($id);

        // Editar el registro
        return view('equipos.edit', compact('juegos', 'equipo'));
    }

    /**
     * Actualiza el registro especificado en el almacenamiento.
     */
    public function update(Request $request, string $id)
    {
        // Convertir el campo 'activo' a booleano
        $request->merge(['activo' => $request->has('activo')]);

        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'fecha_fundacion' => 'required|date',
            'activo' => 'required|boolean',
            'victorias' => 'required|integer',
            'juego_id' => 'nullable|exists:juegos,id',
        ], [
            // Mensaje si el campo 'juego_id' no existe
            'juego_id.exists' => 'El juego seleccionado no existe.',
        ]);

        // Buscar el registro
        $equipo = Equipo::findOrFail($id);

        // Actualizar el registro
        $equipo->update($request->all());

        /*
        $equipo->nombre = $request->nombre;
        $equipo->email = $request->email;
        $equipo->fecha_fundacion = $request->fecha_fundacion;
        $equipo->activo = $request->activo;
        $equipo->victorias = $request->victorias;
        $equipo->juego_id = $request->juego_id;
        $equipo->save();
        */

        // Redireccionar a la vista index
        return redirect()->route('equipos.index', $equipo->id)->with('success', 'Equipo actualizado correctamente.');
    }

    /**
     * Elimina el registro especificado del almacenamiento.
     */
    public function destroy(Equipo $equipo)
    {
        // Eliminar el registro
        $equipo->delete();

        // Redireccionar a la vista index
        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado correctamente.');
    }
}
