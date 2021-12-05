
<?php 
include('funciones/auth.php');
include 'funciones/conexion.php';
$where = '';
if($_SESSION["perfilid"] != 1){
$where = ' and sedeid = '.$_SESSION["sedeid"].' ';
}
$sql = "select sum(total) as total,s.nombre, mp.nombre as mpago from
(
select sum(valor) as total,sedeid,medio_pago from transac where tipo = 'I' and medio_pago = 1 ".$where."
GROUP by sedeid,medio_pago
UNION 
select IFNULL(sum(valor)*-1 ,0)as total ,sedeid ,medio_pago  from transac where tipo = 'E'  and medio_pago = 1 ".$where."
GROUP by sedeid,medio_pago
UNION 
select IFNULL(sum(valor) ,0)as total ,sedeid ,medio_pago  from transac where tipo = 'I'  and medio_pago != 1  ".$where." and  fecha BETWEEN CURDATE() - INTERVAL 0 DAY AND CURDATE() + INTERVAL 1 DAY
GROUP by sedeid,medio_pago
)x
inner JOIN sedes s on s.id = x.sedeid
INNER JOIN medios_pago mp on mp.id = x.medio_pago
GROUP by s.nombre , mp.nombre ";

$result = mysqli_query($db, $sql);
    
if (!$result) {//si no hay respuesta 
die(mysqli_error($db));
}

while ($row = mysqli_fetch_assoc($result)) {
    $estado[] = $row;
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
    <title>Inicio</title>
</head>
<body>
    <head>
    <?php  include('templates/header.php'); ?>
    </head>
    <main>
    <div class="container mt-5">
    <div class="row">
        <?php foreach ($estado as $key => $e) {
          echo '<div class="col card small-box bg-info" style="margin:5px">
          <div class="card-body">
            <h5 class="card-title text-center"> Sede ' .$e["nombre"]. '<BR /> '.$e["mpago"] .'</h5>
            <p class="card-text text-center"> $ ' .$e["total"]. '.- </p>
          </div>
        </div>';
        }?>
    </div>
    <div class="row">
        <div class="col-2"></div>

        </div>
    </div>
    
    </main>
    <footer>

    </footer>
</body>
</html>

