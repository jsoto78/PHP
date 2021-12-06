
<?php 
include 'conexion.php';
 if($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $perfilid = $_POST["perfilid"];
    $sedeid = $_POST["sedeid"];

    switch ($_POST["tipo"]) {
        case 'crear':
            $pass = $_POST["password"];
            $sql = "INSERT into usuarios (nombre,email,password,perfilid,sedeid) values ('".$nombre."','".$email."','".password_hash($pass, PASSWORD_DEFAULT)."',".$perfilid.",".$sedeid.")";
            $result = mysqli_query($db,$sql);
            if($result){
                //inserto ok
                header("location: ./../usuarios.php");    
            }else{
                echo "ERROR: no se pudo ejecutar la query ". $sql. " ". mysqli_error($db);
            }
            break;
        case 'editar':
            $pass = $_POST["password"];
            if(strlen($pass) > 3){
                $sql = "update usuarios set nombre = '".$nombre."',email = '".$email."', password = '".password_hash($pass, PASSWORD_DEFAULT)."' ,perfilid = ".$perfilid.", fechabaja = NULL , sedeid = ".$sedeid." where id = ".$_POST["id"]." ";
            }
            else{
                $sql = "update usuarios set nombre = '".$nombre."',email = '".$email."',perfilid = ".$perfilid." , fechabaja = NULL, sedeid = ".$sedeid." where id = ".$_POST["id"]." ";
            }
            $result = mysqli_query($db,$sql);
            if($result){
                //actualizo ok
                header("location: ./../usuarios.php");    
            }else{
                echo "ERROR: no se pudo ejecutar la query ". $sql. " ". mysqli_error($db);
            }
            break;
            var_dump(http_response_code(200));
            break;
        case 'borrar':
            $sql = "update usuarios set fechabaja = '".date("Y-m-d H:i:s")."' where id = ".$_POST["id"]." ";
            $result = mysqli_query($db,$sql);
            if($result){
                //elimino ok
                header("location: ./../usuarios.php");    
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
