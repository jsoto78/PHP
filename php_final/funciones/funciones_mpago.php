
<?php 

include 'conexion.php';
 if($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];

    switch ($_POST["tipo"]) {
        case 'crear': //inserto nuevo perfil en la bd
            $pass = $_POST["password"];
            $sql = "INSERT into medios_pago (nombre) values ('".$nombre."')";
            $result = mysqli_query($db,$sql);
            if($result){
                //inserto ok
                header("location: /medios_pago.php");    
            }else{
                echo "ERROR: no se pudo ejecutar la query ". $sql. " ". mysqli_error($db);
            }
            break;
        case 'editar': //Edito los perfiles
            $sql = "update medios_pago set nombre = '".$nombre."', fechabaja = NULL where id = ".$_POST["id"]." ";
            $result = mysqli_query($db,$sql);
            if($result){
                //actualizo ok y redirijo a la pag.
                header("location: /medios_pago.php");    
            }else{
                //muestro error 
                echo "ERROR: no se pudo ejecutar la query ". $sql. " ". mysqli_error($db);
            }
            break;
            var_dump(http_response_code(200));
            break;
        case 'borrar': //doy la baja del perfil
            $sql = "update medios_pago set fechabaja = '".date("Y-m-d H:i:s")."' where id = ".$_POST["id"]." ";
            $result = mysqli_query($db,$sql);
            if($result){
                //elimino ok y vuelvo a la pag.
                header("location: /medios_pago.php");    
            }else{
                echo "ERROR: no se pudo ejecutar la query ". $sql. " ". mysqli_error($db);
            }
            break;
        default:
            # code...
            break;
    }
} 

?>
