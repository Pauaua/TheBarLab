<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    // Mostrar todos los cursos
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('cursos.create');
    }

    // Guardar un nuevo curso
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            // Agrega más validaciones según tus campos
        ]);

        Curso::create($request->all());
        return redirect()->route('cursos.index')->with('success', 'Curso creado correctamente.');
    }

    // Mostrar un curso específico
    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));
    }

    // Actualizar un curso
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            // Agrega más validaciones según tus campos
        ]);

        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        return redirect()->route('cursos.index')->with('success', 'Curso actualizado correctamente.');
    }

    // Eliminar un curso
    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return redirect()->route('cursos.index')->with('success', 'Curso eliminado correctamente.');
    }
}