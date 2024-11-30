<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Juego;

class JuegoController extends Controller
{
    /**
     * Muestra la vista para crear un nuevo registro.
     */
    public function index()
    {
        // Obtener todos los registros
        $juegos = Juego::all();

        return view('juegos.index', compact('juegos'));
    }

    // FUNCIONES CRUD
    /**
     * Muestra la vista para crear un nuevo registro.
     */
    public function create()
    {
        return view('juegos.create');
    }

    /**
     * Guarda el nuevo registro en el almacenamiento.
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        // Crear un nuevo registro
        Juego::create($request->all());

        // Redireccionar a la vista index
        return redirect()->route('juegos.index')->with('success', 'Juego creado correctamente.');
    }

    /**
     * Muestra el registro especificado.
     */
    public function show($id)
    {
        $juego = Juego::findOrFail($id);

        return view('juegos.show', compact('juego'));
    }

    /**
     * Muestra la vista para editar el registro especificado.
     */
    public function edit($id)
    {
        // Buscar el registro
        $juego = Juego::findOrFail($id);

        // Editar el registro
        return view('juegos.edit', compact('juego'));
    }

    /**
     * Actualiza el registro especificado en el almacenamiento.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        // Buscar el registro
        $juego = Juego::findOrFail($id);

        // Actualizar el registro
        //$juego->update($request->all());

        $juego->nombre = $request->nombre;
        $juego->save();

        // Redireccionar a la vista index
        return redirect()->route('juegos.index')->with('success', 'Juego actualizado correctamente.');
    }

    /**
     * Elimina el registro especificado del almacenamiento.
     */
    public function destroy(Juego $juego)
    {
        // Eliminar el registro
        $juego->delete();

        // Redireccionar a la vista index
        return redirect()->route('juegos.index')->with('success', 'Juego eliminado correctamente.');
    }
}
