<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terminar un préstamo</title>
</head>
<body>
    <h1>Confirmar Eliminación de Préstamo</h1>
    <p>¿Estás seguro de que deseas eliminar este préstamo?</p>
    <form action="{{ route('destroy', $prestamo->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Sí, Eliminar Préstamo</button>
    </form>
    <a href="{{ route('index') }}">Cancelar</a>>
</body>
</html>
