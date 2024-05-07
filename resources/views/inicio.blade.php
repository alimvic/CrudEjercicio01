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
                    <h5 class="card-header">MODULO DE EMPLEADOS</h5>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('empleados.index')}}" method="GET">

                    <div class="btn-group">
                        <label class=" p-2" for="">Nombre o Codigo de Empleado</label>

                    </div>

                </form>
            </div>

            <!--Busqueda -->
            <div class="card-body">
                <form action="{{route('empleados.index')}}" method="GET">

                    <div class="btn-group">
                        <label for=""></label>
                        <input type="text" name="busqueda" class="form-control" value="{{$busqueda}}" placeholder="search">
                        <input type="submit" value="BUSCAR" class="btn btn-primary">
                    </div>

                </form>
            </div>




<!--Tabla -->


        <div class="container-fluid">
        <div class= "p-5 table-responsive" >
            <h5 class="card-title">Listado de empleados general</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">NOMBRE</th>
                <th scope="col">CODIGO</th>
                <th scope="col">ESTADO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $empleados as $item )


                <tr>
                <td>{{$item->nombres}} {{$item->apellidos}}</td>
                <td>{{$item->fotos}}</td>
                <td>{{$item->estado}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$empleados->links()}}
        </div>
    </div>

    <!--CRUD OPCIONES -->

        <div class="container text-center">
            <div class="input-group">
                <div class="row">
                <div class="col">
                    <a href="{{route("empleados.create")}}" class="btn btn-success">CREAR</a>

                </div>
                <div class="col">
                    <a href="{{route("empleados.reportes")}}" class="btn btn-warning">REPORTE</a>


                </div>
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
