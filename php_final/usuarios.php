
<?php
include 'funciones/auth.php';
include 'funciones/conexion.php';
//query
$sql = "SELECT u.id,email,u.nombre, p.nombre as perfil, DATE_FORMAT(fechaalta,' %d/%m/%Y %k:%i' ),IFNULL(u.fechabaja,'Activo') FROM usuarios u inner join perfiles p on p.id = u.perfilid and u.fechabaja is null";
$result = mysqli_query($db, $sql);

if (!$result) {//si no hay respuesta {
die(mysqli_error($db));
}
    $usuarios = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $usuarios[] = $row;
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
    <title>Usuarios</title>
</head>
<body>
    <head>
    <?php include 'templates/header.php';?>
    </head>
    <main>
<div class="container mt-5">
    <div class="row">
    
        <div class="col-12">
            <table id="usuarios" class="display" style="width:100%">
            <thead>
 <tr>
      <th>ID</th>
      <th>Usuario</th>
      <th>Nombre</th>
      <th>Perfil</th>
      <th>Fecha Alta</th>
      <th>Fecha de Baja</th>
      <th></th>
</tr>
 </thead>
 <tbody>
<?php foreach ($usuarios as $row): array_map('htmlentities', $row);?>
	 <tr>
	 <td><?php echo implode('</td><td>', $row); ?></td> <td><i class="fas fa-edit"></i></td>
	 </tr>
	 <?php endforeach;?>
 </tbody>
 </table>

        </div>

    </div>
</div>
    </main>
    <footer>

    </footer>

    <script>

$(document).ready(function() {
    $('#usuarios').DataTable({
        dom: 'Bfrtip',
        "language": {
            "url":  "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
        },
        "buttons": [
            {
                text: 'Nuevo Usuario',
                action: function ( e, dt, node, config ) {
                    alert( 'Button activated' ); //llamar modal usuario
                }
            }
        ]
       
    });
} );
        </script>
</body>
</html>