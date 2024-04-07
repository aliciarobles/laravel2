<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Préstamo</title>
</head>
<body>
    <h1>Añadir Nuevo Préstamo</h1>
    <form method="POST" action="{{ route('store') }}">
        @csrf
        <label for="libro_id">Libro:</label>
        <select name="libro_id" id="libro_id">
            @foreach($libros as $libro)
                <option value="{{ $libro->id }}">{{ $libro->titulo }}</option>
            @endforeach
        </select><br><br>

        <label for="fecha_prestamo">Fecha de Préstamo:</label>
        <input type="date" id="fecha_prestamo" name="fecha_prestamo"><br><br>

        <label for="fecha_devolucion">Fecha de Devolución:</label>
        <input type="date" id="fecha_devolucion" name="fecha_devolucion"><br><br>

        <button type="submit">Guardar Préstamo</button>
    </form>
</body>
</html>
