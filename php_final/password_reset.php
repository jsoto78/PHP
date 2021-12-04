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
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $info = "Restablecer password";
    $body = "ingresa en el sig link para restableser la password";


    try {
        $mail->isSMTP(); // tell to use smtp
        $mail->CharSet = "utf-8"; // set charset to utf8
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587; // most likely something different for you. This is the mailtrap.io port i use for testing.
        $mail->Username = 'apps4u@mediacentertv.com.ar';
        $mail->Password = 'jvptstfsjnimxdiq';
        $mail->setFrom("apps4u@apps4u.com.ar", "Info 🤖 M22Apps");
        $mail->Subject = "🤖 " . $info["subjet"] . " 🤖";
        $mail->IsHTML(true);
        $mail->MsgHTML($body);
        $mail->addAddress("jsoto@apps4u.com.ar", "Jose Soto");
        $mail->addReplyTo("jsoto@apps4u.com.ar", "Jose Soto");
        $mail->send();
    } catch (phpmailerException $e) {
        dd($e);
        return $e;
    } catch (Exception $e) {
        dd($e);
        return $e;
    }

} 


?>

<div class="body-login row">
            <div class="col">
                <div class="formpassreset">
                    <h2>Restablecé tu contraseña</h2>
                    <form class="text-center" method="POST" action="password_reset.php">
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Usuario</label>
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Ingresá tu email"
                               required>
                    </div>
                        <button type="submit" class="btn btn-secondary">Ingresar</button>
           
                    </form>
                    <p>Te enviaremos un mail para con las instrucciones para restablecer la contraseña</p>
                </div>
            </div>
      

</div>
</body>
</html>

