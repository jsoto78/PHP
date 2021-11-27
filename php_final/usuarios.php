
<?php
include 'funciones/auth.php';
include 'funciones/conexion.php';
//query selectionamos los usuarios 
$sql = "SELECT u.id,email,u.nombre, p.nombre as perfil, DATE_FORMAT(fechaalta,' %d/%m/%Y %k:%i' ),IFNULL(u.fechabaja,'Activo') FROM usuarios u inner join perfiles p on p.id = u.perfilid and u.fechabaja is null";
$result = mysqli_query($db, $sql);

if (!$result) {//si no hay respuesta {
die(mysqli_error($db));
}
    $usuarios = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $usuarios[] = $row;
    }
//query selectionamos los perfiles 
$sql = "SELECT id,nombre  FROM perfiles where fechabaja is null";
$result = mysqli_query($db, $sql);
if (!$result) {//si no hay respuesta {
die(mysqli_error($db));
}
    $perfiles = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $perfiles[] = $row;
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

<!-- Modal -->
<div class="modal fade" id="usuarioModal" tabindex="-1" aria-labelledby="usuarioModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="usuarioModalLabel">Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="funciones/funciones_usuarios.php" autocomplete="off" method="post">
       <div class="row">
            <div class="col-6">
                <label for="nombre" class="form-label">Nombre Apellido</label>
                <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Juan Perez">
              
            </div>
            <div class="col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email"name="email" autocomplete="off" placeholder="jperez@demo.com">
                <input type="hidden" name="tipo" id="tipo" value="crear">
                <input type="hidden" name="id" id="id" value="crear">
            </div>
       </div>
       <div class="row mt-3">
            <div class="col-6">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password"  name="password" >
              
            </div>
            <div class="col-6 form-check">
                <label for="cpassword" class="form-label">Confirma Contraseña</label>
                <input type="password" class="form-control" id="cpassword"  name="cpassword">
                <div class="invalid-feedback" id="lblpass">Las contraseñas no coinciden</div>
              
            </div>
        </div>
       <div class="row">
        <div class="col">
        
       
            <select class="form-select mt-3" name="perfilid" id="perfilid" aria-label="Perfil">
            <option value="" selected>Selecciona perfil</option>
            <?php 
            foreach ($perfiles as $p){
                echo ' <option value="'.$p["id"].'">'.$p["nombre"].'</option>';
            } 
            ?>
            </select>
            </form>
        </div></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" id="btnEliminarUsuario" class="btn btn-primary">Eliminar</button>
        <button type="submit" id="btnGuardarUsuario" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>