
<?php
include 'funciones/auth.php';
include 'funciones/conexion.php';
//query selectionamos los usuarios
$sql = "SELECT u.id,email,u.nombre, p.nombre as perfil, DATE_FORMAT(fechaalta,' %d/%m/%Y %k:%i' ),IFNULL(DATE_FORMAT(u.fechabaja,' %d/%m/%Y %k:%i' ),'Activo'),u.perfilid,u.sedeid FROM usuarios u inner join perfiles p on p.id = u.perfilid ";
$result = mysqli_query($db, $sql);

if (!$result) { //si no hay respuesta {
    die(mysqli_error($db));
}
$usuarios = array();
while ($row = mysqli_fetch_assoc($result)) {
    $usuarios[] = $row;
}
//query selectionamos los perfiles
$sql = "SELECT id,nombre  FROM perfiles where fechabaja is null";
$result = mysqli_query($db, $sql);
if (!$result) { //si no hay respuesta {
    die(mysqli_error($db));
}
$perfiles = array();
while ($row = mysqli_fetch_assoc($result)) {
    $perfiles[] = $row;
}
//query selectionamos las sedes
$sql = "SELECT id,nombre  FROM sedes where fechabaja is null";
$result = mysqli_query($db, $sql);
if (!$result) { //si no hay respuesta {
    die(mysqli_error($db));
}
$sedes = array();
while ($row = mysqli_fetch_assoc($result)) {
    $sedes[] = $row;
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
<h3 class="text-center mb-4">Usuarios</h3>
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
      <th></th>
      <th></th>
</tr>
 </thead>
 <tbody>
<?php foreach ($usuarios as $row): array_map('htmlentities', $row);?>
		 <tr>
		 <td class="text-center"><?php echo implode('</td><td class="text-center">', $row); ?></td> <td><a class="btnEdit" data-sedeid="<?php echo $row["sedeid"] ?>" data-id="<?php echo $row["id"] ?>" data-perfilid="<?php echo $row["perfilid"] ?>" data-nombre="<?php echo $row["nombre"] ?>" data-email="<?php echo $row["email"] ?>"><i class="fas fa-edit" ></i></a></td>
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

<!-- Modal -->
<div class="modal fade" id="usuarioModal" tabindex="-1" aria-labelledby="usuarioModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usuarioModalLabel">Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/funciones/funciones_usuarios.php" autocomplete="off" method="post">
       <div class="row">
            <div class="col-6">
                <label for="nombre" class="form-label">Nombre Apellido</label>
                <input type="text" required class="form-control" id="nombre"  name="nombre" placeholder="Juan Perez">

            </div>
            <div class="col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" required class="form-control" id="email"name="email" autocomplete="off" placeholder="jperez@demo.com">
                <input type="hidden" name="tipo" id="tipo" value="crear">
                <input type="hidden" name="id" id="id" value="crear">
            </div>
       </div>
       <div class="row mt-3">
            <div class="col-6">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password"  name="password" required>

            </div>
            <div class="col-6 form-check">
                <label for="cpassword" class="form-label">Confirma Contraseña</label>
                <input type="password" class="form-control" id="cpassword"  name="cpassword" required>
                <div class="invalid-feedback" id="lblpass">Las contraseñas no coinciden</div>

            </div>
        </div>
       <div class="row mt-3">
        <div class="col-6">
        <label for="perfilid" class="form-label">Perfil</label>
            <select class="form-select" name="perfilid" id="perfilid" aria-label="Perfil" required>
            <option value="" selected>Selecciona perfil</option>
            <?php
            foreach ($perfiles as $p) {
                echo ' <option value="' . $p["id"] . '">' . $p["nombre"] . '</option>';
            }
?>
            </select>

        </div>
        <div class="col-6">
        <label for="sedeid" class="form-label">Sede</label>
            <select class="form-select" name="sedeid" id="sedeid" aria-label="Sede" required>
            <option value="" selected>Selecciona Sede</option>
            <?php
                foreach ($sedes as $s) {
                    echo ' <option value="' . $s["id"] . '">' . $s["nombre"] . '</option>';
                }
?>
            </select>

        </div>
        </div>
       <div class="row mt-3">
       <div class="col-6">
</div>
        <div class="col-6">
        <div class="form-check form-switch mt-4">
        <input class="form-check-input" type="checkbox" id="checkCambioPass" checked>
        <label class="form-check-label" for="checkCambioPass">Ingresar Contraseña</label>
        </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" id="btnEliminarUsuario" class="btn btn-danger">Eliminar</button>
        <button type="submit" id="btnGuardarUsuario" class="btn btn-success">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>


</body>
</html>