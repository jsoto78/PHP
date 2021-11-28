
<?php 
include('funciones/auth.php');
include 'funciones/conexion.php';
//query selectionamos los movientos 
$sql = "SELECT * from transac ";
$result = mysqli_query($db, $sql);

if (!$result) {//si no hay respuesta {
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
    <?php  include('templates/header.php'); ?>
    </head>
    <main>
    <div class="container mt-5">
<h3 class="text-center mb-4">Movimientos</h3>
    <div class="row">
    <div class="col-2"></div>
        <div class="col-8">
            <table id="perfiles" class="display" style="width:100%">
            <thead>
 <tr>
      <th>ID</th>
      <th>Perfil</th>
      <th>Fecha de Baja</th>
      <th></th>
</tr>
 </thead>
 <tbody>
<?php foreach ($movimientos as $row): array_map('htmlentities', $row);?>
	 <tr>
	 <td class="text-center"><?php echo implode('</td><td class="text-center">', $row); ?></td> <td><a class="btnEditMoviento" data-id="<?php echo $row["id"]?>" data-nombre="<?php echo $row["nombre"]?>"><i class="fas fa-edit" ></i></a></td>
	 </tr>
	 <?php endforeach;?>
 </tbody>
 </table>
    </main>
    <footer>

    </footer>
</body>
</html>