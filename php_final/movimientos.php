<?php
include 'funciones/auth.php';
include 'funciones/conexion.php';
$where = '';
if($_SESSION["perfilid"] != 1){
$where = ' and t.sedeid = '.$_SESSION["sedeid"].' ';
}
//query selectionamos los movientos
$sql = "select t.id ,DATE_FORMAT(t.fecha,'%d/%m/%Y %k:%i hs' ), t.tipo , u.nombre as usuario,t.valor ,paciente_hc ,paciente_nombre , t.profesional_nombre, d.nombre as deriva ,practica 
,mp.nombre as mediopago,t.observaciones ,s.nombre as sede from transac t 
inner join usuarios u on u.id = t.usuarioid
inner join derivadores d on d.id  = t.deriva
INNER JOIN medios_pago mp on mp.id = t.medio_pago
INNER JOIN sedes s on s.id  = t.sedeid where 1 = 1 ".$where;

$fechai;
$fechaf;
$tipo ='';
if (isset($_GET["tipo"])) { //filto tipo
    $tipo = $_GET["tipo"];
    $sql = $sql . " and t.tipo = '" . $_GET["tipo"] . "'";
}
if (isset($_GET["fechai"]) && isset($_GET["fechaf"])) { //filtro fecha
    if ($_GET["fechai"] != '' && $_GET["fechaf"] != '') {
        $fechai = $_GET["fechai"];
        $fechaf = $_GET["fechaf"];
        $sql = $sql . " and fecha BETWEEN '" . $_GET["fechai"] . "' and '" . $_GET["fechaf"] . " 23:50:00'";
    }
}


$result = mysqli_query($db, $sql);

if (!$result) { //si no hay respuesta {
    die(mysqli_error($db));
}
$movimientos = array();
while ($row = mysqli_fetch_assoc($result)) {
    $movimientos[] = $row;
}
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
        <?php include 'templates/header.php';?>
    </head>
    <main>
        <div class="container mt-5 ml-1">
            <h3 class="text-center mb-4">Movimientos</h3>

            <form action="movimientos.php" method="get">
                <div class="row mb-4 mt-4">


                    <div class="col-3">
                        <label for="perfilid" class="form-label">Tipo</label>
                        <select class="form-select" name="tipo" id="tipo" aria-label="tipo">
                            <option value="" selected>Selecciona Tipo</option>
                            <option value="I" <?php if ($tipo =="I" ) { echo 'selected' ;}?> >Ingreso</option>
                            <option value="E" <?php if ($tipo =="E" ) { echo 'selected' ;}?> >Egreso</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label for="perfilid" class="form-label">Fecha desde</label>
                        <input type="date" class="form-control" name="fechai" value="<?php echo $fechai ?>" />
                    </div>
                    <div class="col-2">
                        <label for="perfilid" class="form-label">Fecha hasta</label>
                        <input type="date" class="form-control" value="<?php echo $fechaf ?>" name="fechaf" />
                    </div>
                    <div class="col-2">
                        <div class="mt-2">
                            <button type="submit"  class="btn btn-info btn-filtrar">Filtrar</button>
                            <button type="button" id="btnlimpiar" class="btn btn-info btn-filtrar">Limpiar</button>
                        </div>
                    </div>
                  
                </div>
            </form>
            </div>
            <div class="row ms-2 mt-2">
                <div class="col-12">
                    <table id="movimientos" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha </th>
                                <th>Tipo</th>
                                <th>Usuario</th>
                                <th>Monto</th>
                                <th>HC</th>
                                <th>Paciente</th>
                                <th>Profesional</th>
                                <th>Deriva</th>
                                <th>Practica</th>
                                <th>Medio de Pago</th>
                                <th>Obs</th>
                                <th>Sede</th>
                   

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($movimientos as $row): array_map('htmlentities', $row);?>
                            <tr>
                                <td class="text-center">
                                    <?php echo implode('</td><td class="text-center">', $row); ?>
                                </td>
                                
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
       
    </main>
    <footer>

    </footer>
</body>

</html>