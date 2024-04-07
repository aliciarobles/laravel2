<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'Libros';
    protected $fillable = ['nombre','autor','año_publicacion'];


    public static function obtenerTodos(){
        return Libro::all();
    }

    public static function getLibroID($id){
        return Libro::find($id);
    }

    public static function getLibroTitulo($titulo){
        return Libro::wher('titulo' , '=' , $titulo);
    }


    public static function saveLibro($titulo, $autor, $año_publicacion){
        $libro = new Libro;
        $libro->titulo = $titulo;
        $libro->autor = $autor;
        $libro->año_publicacion = $año_publicacion;
        $libro->save();

        return view('detallesLibro', compact('libro'));

    }

    public static function updateLibro($id, $titulo, $autor, $año_publicacion){
        $libro = Libro::find($id);
        if( isset($libro) ) {
        $libro->titulo = $titulo;
        $libro->autor = $autor;
        $libro->año_publicacion = $año_publicacion;
        $libro->save();

        return view('detallesLibro', compact('libro'));

        }

        return "No existe ese ID del libro";

    }



    public static function deleteLibro($id){
        $libro = Libro::find($id);
        if( isset($libro) ) {
        $libro->delete();
        return "OK";

        }

        return "No existe ese ID del libro";

    }
}
