<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibroCRUDController extends Controller
{
    public function mostrarFormularioAdd(){
        return view('addLibro');
    }

    public function addLibro(Request $datosEnviados){
        return Libro::saveLibro($datosEnviados->input('titulo'), $datosEnviados->input('autor'), $datosEnviados->input('año_publicacion'));
    }

    public function todos(){
        $libros = Libro::all();
        return view('todos', compact('libros'));
    }

    public function detallesLibro($id){
        $libro = Libro::find($id);
        return view('detallesLibro', compact('libro'));
    }

    public function editarLibro($id)
    {
        $libro = Libro::findOrFail($id);
        return view('editarLibro', compact('libro'));
    }

    public static function update(Request $datosEnviados,$id){
        return Libro::updateLibro($id, $datosEnviados->input('titulo'), $datosEnviados->input('autor'), $datosEnviados->input('año_publicacion'));

    }

    }

