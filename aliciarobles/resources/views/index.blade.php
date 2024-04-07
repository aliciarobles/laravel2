<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Préstamos</title>
</head>
<body>
    <h1>Listado de Préstamos</h1>
    <a href="{{ route('create') }}">Nuevo Préstamo</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Libro</th>
            <th>Fecha de Préstamo</th>
            <th>Fecha de Devolución</th>
            <th>Acciones</th>
        </tr>
        @foreach($prestamos as $prestamo)
        <tr>
            <td>{{ $prestamo->id }}</td>
            <td>{{ $prestamo->fecha_prestamo }}</td>
            <td>{{ $prestamo->fecha_devolucion }}</td>
            <td>
            <td>
                    <a href="{{ route('show', $prestamo->id) }}">Ver Detalles</a>
            <form action="{{ route('eliminar', $prestamo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Finalizar Préstamo</button>
            </form>
            </td>
        </tr>
        @endforeach


    </td>
    </table>
</body>
</html>
