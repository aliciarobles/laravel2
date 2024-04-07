<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de un préstamo</title>
</head>
<body>
    <h1>Detalles del Préstamo</h1>
    <p><strong>ID:</strong> {{ $prestamo->id }}</p>
    <p><strong>Fecha de Préstamo:</strong> {{ $prestamo->fecha_prestamo }}</p>
    <p><strong>Fecha de Devolución:</strong> {{ $prestamo->fecha_devolucion }}</p>
</body>
</html>
