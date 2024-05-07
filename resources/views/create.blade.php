<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agregar personal</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
  <body>
    <div class="card">
        <h5 class="card-header">Agregar nueva persona</h5>
        <div class="card-body container-fluid ">

            <p class="card-text">
                <br>
                <div class="card ">
                    <h5 class="card-header">Datos personales</h5>
                </div>
                <br>
                <div class="row g-5">
                <form action="{{ route('empleados.store') }}" method="POST">
                    @csrf
                    <div class="row g-5">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Nombres</label>
                                <input type="text" name="nombres" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Cedula</label>
                                <input type="text" name="cedula" class="form-control"   required>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Provincia</label>
                                <select class="form-select" name="provincia" aria-label="Default select example">
                                    <option selected>Selecione</option>
                                    <option value="1">Azuay</option>
                                    <option value="2">Bolivar</option>
                                    <option value="3">Cañar</option>
                                    <option value="4">Carchi</option>
                                    <option value="5">Chimborazo</option>
                                    <option value="6">Cotopaxi</option>
                                    <option value="7">El Oro</option>
                                    <option value="8">Esmeraldas</option>
                                    <option value="9">Galapagos</option>
                                    <option value="10">Guayas</option>
                                    <option value="11">Imbabura</option>
                                    <option value="12">Loja</option>
                                    <option value="13">Los Rios</option>
                                    <option value="14">Manabi</option>
                                    <option value="15">M Santiago</option>
                                    <option value="16">Napo</option>
                                    <option value="17">Orellana</option>
                                    <option value="18">Paztasa</option>
                                    <option value="19">Pichincha</option>
                                    <option value="20">Santa Elena</option>
                                    <option value="21">S.D de los Tsachilas</option>
                                    <option value="22">Sucumbios</option>
                                    <option value="23">Tunguragua</option>
                                    <option value="24">Zamora Chinchipe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Fecha de nacimiento</label>
                                <input type="date" name="fechanacimiento" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Correo</label>
                                <input type="email" name="correo" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Observaciones</label>
                                <textarea class="form-control" minlength="100" maxlength="150" name="observaciones" placeholder="Comentarios u observaciones referente a la Ficha Personal..." id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Codigo</label>
                                <input type="text"  name="fotos" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Estado Civil</label>
                                <input type="text" name="estcivil" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Tipo Sanguineo</label>
                                <input type="text" name="tipsangre" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="card ">
                        <h5 class="card-header">Datos Laborales</h5>
                    </div>
                    <br>
                    <div class="row g-5">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Fecha Ingreso</label>
                                <input type="date" name="fecha_ingreso" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                    <label for="">Cargo</label>
                                    <input type="text" name="cargo" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                    <label for="">Departamento</label>
                    <input type="text" name="departamento" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                    <label for="">Provincia</label>
                    <select class="form-select" name="provempleo" aria-label="Default select example">
                        <option selected>Selecione</option>
                        <option value="Azuay">Azuay</option>
                        <option value="Bolivar">Bolivar</option>
                        <option value="Cañar">Cañar</option>
                        <option value="Carchi">Carchi</option>
                        <option value="Chimborazo">Chimborazo</option>
                        <option value="Cotopaxi">Cotopaxi</option>
                        <option value="El Oro">El Oro</option>
                        <option value="Esmeraldas">Esmeraldas</option>
                        <option value="Galapagos">Galapagos</option>
                        <option value="Guayas">Guayas</option>
                        <option value="Imbabura">Imbabura</option>
                        <option value="Loja">Loja</option>
                        <option value="Los Rios">Los Rios</option>
                        <option value="Manabi">Manabi</option>
                        <option value="M Santiago">M Santiago</option>
                        <option value="Napo">Napo</option>
                        <option value="Orellana">Orellana</option>
                        <option value="Paztasa">Paztasa</option>
                        <option value="Pichincha">Pichincha</option>
                        <option value="Santa Elena">Santa Elena</option>
                        <option value="S.D de los Tsachilas">S.D de los Tsachilas</option>
                        <option value="Sucumbios">Sucumbios</option>
                        <option value="Tunguragua">Tunguragua</option>
                        <option value="Zamora Chinchipe">Zamora Chinchipe</option>
                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                    <label for="">Sueldo</label>
                    <div class="input-group">
                    <input type="text" name="sueldo" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">USD</span>
                    </div>
                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">


                                <label class="form-label" for="form9Example4">Jornada Parcial </label>
                                    <div class="form-check">
                                        <input class="form-check-input" name="jornada" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Si
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="jornada" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            No
                                        </label>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Estado</label>


                                <select class="form-select" name="estado" aria-label="Default select example" placeholder="Seleccione...">

                                    <option value="Retirado">Retirado</option>
                                    <option value="Vigente">Vigente</option>


                                </select>

                            </div>
                        </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label for="">Observaciones</label>
                                <textarea class="form-control" minlength="100" maxlength="150" name="observlab" placeholder="Comentarios u observaciones referente a la Ficha laboral..." id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>





                    <a href="{{ route("empleados.index") }}" class="btn btn-info" >
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-primary">
                        <span class="fas fa-user-plus"></span> Agregar
                    </button>

                </form>
            </p>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
