<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Libro;
use App\Models\Prestamo;

class PrestamoCRUDController extends Controller
{
    // Mostrar todos los préstamos
    public function index()
    {
        $prestamos = Prestamo::all();
        return view('index', compact('prestamos'));
    }

    // Mostrar el formulario para crear un nuevo préstamo
    public function create()
    {
        $libros = Libro::where('disponible', true)->get();
        return view('create', compact('libros'));
    }

    // Almacenar un nuevo préstamo en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'libro_id' => 'required|exists:libros,id',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'required|date|after_or_equal:fecha_prestamo',
        ]);

        // Verificar si el libro está disponible
        $libro = Libro::findOrFail($request->libro_id);
        if (!$libro->disponible) {
            return redirect()->back()->with('error', 'El libro seleccionado no está disponible.');
        }

        // Crear el préstamo
        $prestamo = new Prestamo();
        $prestamo->libro_id = $request->libro_id;
        $prestamo->fecha_prestamo = $request->fecha_prestamo;
        $prestamo->fecha_devolucion = $request->fecha_devolucion;
        $prestamo->save();

        // Actualizar el estado del libro
        $libro->disponible = false;
        $libro->save();

        return redirect('/prestamos')->with('success', 'Préstamo registrado correctamente.');
    }

    // Mostrar los detalles de un préstamo específico
    public function show($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        return view('show', compact('prestamo'));
    }

    // Mostrar el formulario para editar un préstamo
    public function edit($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        return view('edit', compact('prestamo'));
    }

    // Actualizar un préstamo en la base de datos
    public function update(Request $request, $id)
    {
        // Validación de los datos de entrada si es necesario

        $prestamo = Prestamo::findOrFail($id);
        $prestamo->update($request->all());

        return redirect('/prestamos')->with('success', 'Préstamo actualizado correctamente.');
    }

    // Eliminar un préstamo de la base de datos
    public static function eliminar($id)
    {

        Prestamo::eliminarPrestamo($id);

        return redirect('/prestamos')->with('success', 'Préstamo eliminado correctamente.');
    }


}
