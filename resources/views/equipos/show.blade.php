<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VER EQUIPO</title>
</head>
<body>
    <table class="table table-striped">
        <tr>
            <th>NOMBRE DEL EQUIPO</th>
            <th>PAIS</th>
            <th>CIUDAD</th>
            <th>NUMERO DE JUGADORES</th>
        </tr>
      <tr>
        <td>  {{$equipo->nombreEquipo}}  </td>
        <td>  {{$equipo->pais}}  </td>
        <td>  {{$equipo->ciudad}}  </td>
        <td>  {{$equipo->numeroJugadores}}  </td>
      </tr>

    </table>
</body>
</html>