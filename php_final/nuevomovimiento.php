<?php 
include('funciones/auth.php');
include 'funciones/conexion.php';
//query selectionamos los perfiles 
$sql = "SELECT id ,nombre, IFNULL(DATE_FORMAT(fechabaja,' %d/%m/%Y %k:%i' ),'Activo') as baja from derivadores ";
$result = mysqli_query($db, $sql);

if (!$result) {//si no hay respuesta {
die(mysqli_error($db));
}
    $derivadores = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $derivadores[] = $row;
    }
$sql = "SELECT id ,nombre, IFNULL(DATE_FORMAT(fechabaja,' %d/%m/%Y %k:%i' ),'Activo') as baja from medios_pago ";
$result = mysqli_query($db, $sql);

if (!$result) {//si no hay respuesta {
die(mysqli_error($db));
}
    $mpago = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $mpago[] = $row;
    }
// Cerrando conexion
    mysqli_close($db);
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos</title>
</head>

<body>

    <head>
        <?php  include('templates/header.php'); ?>
    </head>
    <main>
        <div class="container mt-5">
            <h3 class="text-center mb-4">Movimientos</h3>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-6">
                                <label for="nombre" class="form-label">Tipo de Movimiento</label>
                                <select class="form-select" name="tipo" id="tipo" aria-label="tipo">
                                    <option value="" selected>Seleccioná un tipo</option>
                                    <option value="I" >Ingreso</option>
                                    <option value="E" >Egreso</option>
                                    <option value="A" >Ajuste</option>
                                </select>

                            </div>
                            <div class="col-6">
                                <label for="valor" class="form-label">Monto</label>
                                <input type="number" class="form-control" id="valor" name="valor" autocomplete="off">
                                <input type="hidden" name="usuarioid" id="usuarioid" value="ses">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <label for="paciente_hc" class="form-label">Paciente HC</label>
                                <input type="number" class="form-control" id="paciente_hc" name="paciente_hc">

                            </div>
                            <div class="col-8">
                                <label for="paciente_nombre" class="form-label">Paciente Nombre</label>
                                <input type="text" class="form-control" id="paciente_nombre" name="paciente_nombre">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-8">
                                <label for="profesional" class="form-label">Profesional Nombre</label>
                                <input type="text" class="form-control" id="profesional" name="profesional">
                            </div>
                            <div class="col-4">
                                <label for="deriva" class="form-label">Deriva</label>
                                <select class="form-select" name="deriva" id="deriva" aria-label="tipo">
                                    <option value="" selected>Seleccioná un tipo</option>
                                <?php foreach ($derivadores as $key => $d) {
                                echo '<option value="'.$d["id"].'" >'.$d["nombre"].'</option>' ;
                                } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                        <div class="col-8">
                                <label for="practica" class="form-label">Practica</label>
                                <input type="text" class="form-control" id="practica" name="practica">
                            </div>
                            <div class="col-4">
                                <label for="deriva" class="form-label">Medio de pago</label>
                                <select class="form-select" name="mediopago" id="mediopago" aria-label="mediopago">
                                    <option value="" selected>Seleccioná un Medio de pago</option>
                                <?php foreach ($mpago as $key => $m) {
                                echo '<option value="'.$m["id"].'" >'.$m["nombre"].'</option>' ;
                                } ?>
                                </select>
                            </div>
                        </div>

                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
                </div>

                </form>


            </div>
        </div>
        </div>

    </main>
    <footer>

    </footer>
</body>

</html>