<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDITAR EQUIPO</title>
</head>
<body>
    <a href="{{url('equipos')}}" class="list-group-item">Consultar Todos los Equipos</a>
    <a href="{{url('equipos/create')}}" class="list-group-item">Crear Nuevo Equipo </a>
    <h2>Actualizar equipo:  {{ $equipo->nombreEquipo}}</h2>
    <form action="{{ route('equipos.update', $equipo->id) }}"  method="POST">
        @csrf
        @method('PUT')
<label for="NOMBREEQUIPO"> NOMBRE EQUIPO</label>
    <input type="text" name="nombreEquipo" value="{{ $equipo->nombreEquipo }}">
<label for=""> PAIS </label>
    <input type="text" name="pais" value="{{ $equipo->pais }}">
<label for="CIUDAD">CIUDAD</label>
<input type="text" name="ciudad" value="{{ $equipo->ciudad }}">
<label for="NUMERODEJUGADORES">NUMERO DE JUGADORES</label>
<input type="number" name="numeroJugadores" id="" value="{{ $equipo->numeroJugadores }}">

<button type="submit"> ACTUALIZAR EQUIPO</button>
    </form>
</body>
</html>