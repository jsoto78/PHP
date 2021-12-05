<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</head>
<body>
<?php 
include('funciones/conexion.php');
 session_start();
 $error = "";
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "SELECT email,password,nombre,sedeid,id,perfilid  FROM usuarios WHERE email = '$usuario' and fechabaja is null";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count > 0){
        if(password_verify($pass, $row["password"])){
        $_SESSION["auth"]="SI";
        $ahora = date("Y-n-j H:i:s");
        $_SESSION["ultimoAcceso"] = $ahora;
        $_SESSION["nombre"] = $row["nombre"];
        $_SESSION["sedeid"] = $row["sedeid"];
        $_SESSION["perfilid"] = $row["perfilid"];
        $_SESSION["id"] = $row["id"];
        header("Location: index.php");
    }
    else{
        $error = "pass";
       
    }
    }
    else{
        $error = "usr";
       
    }
} 


?>

<div class="body-login row">
 
           
            <div class="col-6 login-left">
                <div class="formlogin">

                    <form method="POST" action="login.php">
                    
                    <div class="mb-3">
                        <label for="email" class="form-label text-start">Usuario</label>
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Ingresá tu email"
                               required>
                    </div>
    
                        <div class="mb-3">
                         <label for="password" class="form-label">Contraseña</label>
                            <input id="password" name="password" type="password" class="form-control form-control-lg"
                                placeholder="Ingresá tu contraseña" required>
                        </div>
                    <div class="row">
                
                        <div class="col align-self-end">
                            <button type="submit" class="btn btn-info d-block m-auto">Ingresar</button>
                        </div>
                    </div>
                    
                      
    
             
                 <?php 
                 if($error == "pass"){
                    echo '<div class="alert alert-danger" role="alert">contraseña incorrecta</div>';
                 }elseif($error == "usr"){
                    echo '<div class="alert alert-danger" role="alert">No existe el usuario</div>';
                 }
                 ?>
                    </form>
                </div>
            </div>
            <div class="col-6 pt-4 login-right">
            <div class="text-white position-absolute bottom-0 end-0 me-1 p-2">
            <p class="text-white p-1">Sistema de caja</p>
            </div>
          
            </div>

</div>
</body>
</html>

