<form action="{{ route('AddLibro')}}" method="POST">

@csrf
<label for="">Titulo</label>
<input type="text" name="titulo">
<label for="">Autor</label>
<input type="text" name="autor">
<label for="">Año de Publicacion</label>
<input type="year" name="año_publicacion">
<button type="submit"> Guardar libro </button>

</form>


