<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTADO DE EQUIPOS</title>
</head>
<body>
    <a href="{{url('equipos')}}" class="list-group-item">Consultar Todos los Equipos</a>
    <a href="{{url('equipos/create')}}" class="list-group-item">Crear Nuevo Equipo</a>
    @foreach($equipos as $equipo)
<table class="table table-striped">
    <tr>
<th>NOMBRE DEL EQUIPO :</th>
<th>PAIS:</th>
<th>CIUDAD:</th>
<th>NUMERO DE JUGADORES</th>
<th>ACCIONES</th>
    </tr>
    <tr>
        <td> {{$equipo->nombreEquipo}}  </td>
        <td> {{$equipo->pais}} </td>
        <td> {{$equipo->ciudad}} </td>
        <td> {{$equipo->numeroJugadores}} </td>
        <td>
            <form  action="{{route('equipos.destroy', $equipo->id)}}" method="POST">
   
                @csrf
                @method('DELETE')
              <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info"> Detalles </a>
              <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning"> Editar </a>
              <button href="" class="btn btn-danger"> Eliminar </button>
            </form>
        </td>
    </tr>
</table>
@endforeach
</body>
</html>