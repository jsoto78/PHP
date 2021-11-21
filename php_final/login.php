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
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "SELECT email,password,nombre FROM usuarios WHERE email = '$usuario' ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count > 0){
        if(password_verify($pass, $row["password"])){
        $_SESSION["auth"]="SI";
        $ahora = date("Y-n-j H:i:s");
        $_SESSION["ultimoAcceso"] = $ahora;
        $_SESSION["nombre"] = $row["nombre"];
        header("Location: index.php");
    }
    else{
        echo '<div class="alert alert-danger" role="alert">contraseña incorrecta</div>';
    }
    }
    else{
       echo '<div class="alert alert-danger" role="alert">No existe el usuario</div>';
    }
} 


?>

<div class="body-login row">
 
           
            <div class="col-6 login-left">
                <div class="formlogin">

                    <form class="text-center" method="POST" action="login.php">
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Usuario</label>
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Ingresá tu email"
                               required>
                    </div>
    
                        <div class="mb-3">
                         <label for="password" class="form-label">Contraseña</label>
                            <input id="password" name="password" type="password" class="form-control form-control-lg"
                                placeholder="Ingresá tu contraseña" required>
                        </div>
    
                        <button type="submit" class="btn btn-secondary">Ingresar</button>
    
                        <div class="mt-3">
                            <a class="text-decoration-none password-recovery"
                                href="/password/reset.php">¿ Olvidaste
                                tu contraseña ?</a>
                        </div>
                 
                    </form>
                </div>
            </div>
            <div class="col-6 pt-4 login-right">
            
            </div>

</div>
</body>
</html>

