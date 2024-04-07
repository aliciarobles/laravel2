<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    protected $table = 'prestamos';

    public static function eliminarPrestamo($id){
        $prestamo = Prestamo::find($id);
        if(isset($prestamo)) {
            $prestamo->delete();
            return 'borrado';
        }

        return "No existe ese ID del prestamo";

    }

}
