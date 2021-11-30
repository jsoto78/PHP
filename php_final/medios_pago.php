
<?php
include 'funciones/auth.php';
include 'funciones/conexion.php';
//query selectionamos los perfiles 
$sql = "SELECT id ,nombre, IFNULL(DATE_FORMAT(fechabaja,' %d/%m/%Y %k:%i' ),'Activo') as baja from medios_pago ";
$result = mysqli_query($db, $sql);

if (!$result) {//si no hay respuesta {
die(mysqli_error($db));
}
    $medios_pago = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $medios_pago[] = $row;
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
    <title>Medios de Pago</title>
</head>
<body>
    <head>
    <?php include 'templates/header.php';?>
    </head>
    <main>
<div class="container mt-5">
    <h3 class="text-center mb-4">Medios de pago</h3>
    <div class="row">
    <div class="col-2"></div>
        <div class="col-8">
            <table id="mediospago" class="display" style="width:100%">
            <thead>
 <tr>
      <th>ID</th>
      <th>Descipción</th>
      <th>Fecha de Baja</th>
      <th></th>
</tr>
 </thead>
 <tbody>
<?php foreach ($medios_pago as $row): array_map('htmlentities', $row);?>
	 <tr>
	 <td class="text-center"><?php echo implode('</td><td class="text-center">', $row); ?></td> <td><a class="btnEditMedioPago" data-id="<?php echo $row["id"]?>" data-nombre="<?php echo $row["nombre"]?>"><i class="fas fa-edit" ></i></a></td>
	 </tr>
	 <?php endforeach;?>
 </tbody>
 </table>

        </div>

    </div>
    <div class="col-2"></div>
</div>
    </main>
    <footer>

    </footer>

<!-- Modal -->
<div class="modal fade" id="medioPagolModal" tabindex="-1" aria-labelledby="medioPagolModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="medioPagolModalLabel">Medio de pago</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/funciones/funciones_mpago.php" autocomplete="off" method="post">
       <div class="row">
            <div class="col-12">
                <label for="nombre" class="form-label">Descripción</label>
                <input type="text" required class="form-control" id="nombre"  name="nombre" placeholder="Usuario">
                <input type="hidden" name="tipo" id="tipo" value="crear">
                <input type="hidden" name="id" id="id" >
            </div>
           
       </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" id="btnEliminarMedioPago" class="btn btn-danger">Eliminar</button>
            <button type="submit" id="btnGuardarMedioPago" class="btn btn-success">Guardar</button>
        </div>
      </form>
      </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>