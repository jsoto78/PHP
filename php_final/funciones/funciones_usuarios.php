
<?php 
 if($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $perfilid = $_POST["perfilid"];
    switch ($_POST["tipo"]) {
        case 'crear':
            $sql = "SELECT email,password,nombre FROM usuarios WHERE email = '$usuario' ";
            break;
        case 'etitar':
            # code...
            break;
        case 'borrar':
            # code...
            break;
        default:
            # code...
            break;
    }



    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

} 


?>
