<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREAR EQUIPOS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('equipos')}}" class="list-group-item">Consultar Todos los Equipos</a>
                <a href="{{url('equipos/create')}}" class="list-group-item">Crear Nuevo Equipo</a>
                <form action="{{ route('equipos.store') }}" method="POST">
                    @csrf
 <div class="form-group">
    <label for="NOMBRE DEL EQUIPO">NOMBRE DEL EQUIPO</label> <br>
<input type="text" name="nombreEquipo"> <br>
<label for="PAIS">PAIS</label> <br>
<input type="text" name="pais"><br>
<label for="CIUDAD">CIUDAD</label> <br>
<input type="text" name="ciudad"><br>
<label for="NUMERO DE JUGADORES">NÙMERO DE JUGADORES</label> <br>
<input type="number" name="numeroJugadores"> <br>
<button class="btn btn-primary">CREAR EQUIPO</button>

 </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>