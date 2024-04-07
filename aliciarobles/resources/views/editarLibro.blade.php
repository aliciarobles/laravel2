<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edición de Libros</title>
</head>
<body>
    <h1>Editar Libro</h1>

    <form method="POST" action="/libros/{{ $libro->id }}">
        @csrf
        @method('PUT')
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="{{ $libro->titulo }}"><br><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" value="{{ $libro->autor }}"><br><br>

        <label for="año_publicacion">Año de publicación:</label>
        <input type="text" id="año_publicacion" name="año_publicacion" value="{{ $libro->año_publicacion }}"><br><br>

        <button type="submit">Guardar cambios</button>
    </form>
</body>
</html>
