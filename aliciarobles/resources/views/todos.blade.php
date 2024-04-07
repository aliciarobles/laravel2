<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Libros</title>
</head>
<body>
    <h1>Listado de Libros</h1>

    <table>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Género</th>
        </tr>
        @foreach($libros as $libro)
        <tr>
            <td>{{ $libro->titulo }}</td>
            <td>{{ $libro->autor }}</td>
            <td>{{ $libro->año_publicacion }}</td>
        </tr>
        @endforeach
    </table>
</html>
