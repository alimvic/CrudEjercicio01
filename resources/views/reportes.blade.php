<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Provedatos prueba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>



    <div class="card">

            <!--Titulo -->
            <div class="container-fluid">
                <div class= "text-center p-3 " >
                    <h5 class="card-header">REPORTES DE EMPLEADOS</h5>
                </div>
            </div>




<!--Tabla -->


        <div class="container-fluid">
        <div class= "p-5 table-responsive" >
            <h5 class="card-title">Listado de empleados general</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Cedula</th>
                <th scope="col">Provincia</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Correo</th>
                <th scope="col">Observaciones</th>
                <th scope="col">Estado civil</th>
                <th scope="col">T sanguineo</th>
                <th scope="col">Fecha de ingreso</th>
                <th scope="col">Cargo</th>
                <th scope="col">Departamento</th>
                <th scope="col">Provincia</th>
                <th scope="col">Sueldo</th>
                <th scope="col">Jornada Parcial</th>
                <th scope="col">Estado</th>
                <th scope="col">Observaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $datos as $item )


                <tr>
                <td>{{$item->nombres}}</td>
                <td>{{$item->apellidos}}</td>
                <td>{{$item->cedula}}</td>
                <td>{{$item->provincia}}</td>
                <td>{{$item->fechanacimiento}} </td>
                <td>{{$item->correo}}</td>
                <td>{{$item->observaciones}}</td>
                <td>{{$item->estcivil}} </td>
                <td>{{$item->tipsangre}}</td>
                <td>{{$item->fecha_ingreso}}</td>
                <td>{{$item->cargo}}</td>
                <td>{{$item->departamento}}</td>
                <td>{{$item->provempleo}}</td>
                <td>{{$item->sueldo}}</td>
                <td>{{$item->jornada}}</td>
                <td>{{$item->estado}}</td>
                <td>{{$item->observlab}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

    <!--CRUD OPCIONES -->

        <div class="container text-center">
            <div class="input-group">
                <div class="row">

                <div class="col">
                    <a href="{{route("empleados.index")}}" class="btn btn-danger">SALIR</a>

                </div>
            </div>
        </div>
    </div>

        </div>

        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
