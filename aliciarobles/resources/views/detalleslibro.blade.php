<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del libro</title>
</head>
<body>
    <h1>Detalles del Libro</h1>

    <ul>
        <li><strong>Título:</strong> {{ $libro->titulo }}</li>
        <li><strong>Autor:</strong> {{ $libro->autor }}</li>
        <li><strong>Año de publicación:</strong> {{ $libro->año_publicacion }}</li>
    </ul>
</body>
</html>
