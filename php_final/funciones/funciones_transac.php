
<?php 
include 'conexion.php';
 if($_SERVER["REQUEST_METHOD"] == "POST") {

   /** Inicializo variables para no enviar NULL a la base */
    $usuarioid = "";
    $sedeid = "";
    $monto = "";
    $paciente_hc = 0;
    $paciente_nombre = "";
    $profesional = "";
    $deriva = "";
    $practica = "";
    $mediopago = "";
    $observaciones = "";

    /** Verifico que lleguen las variables del form */
    if (isset($_POST["tipo"])){
        $tipo = $_POST["tipo"];
    }
    if (isset($_POST["usuarioid"])){
        $usuarioid = $_POST["usuarioid"];
    }else{
        // si no viene el usuario lo mando a login.
        header("Location: login.php");
        exit();
    }
    
    if (isset($_POST["sedeid"])){
        $sedeid = $_POST["sedeid"];
    }
    
    if (isset($_POST["valor"])){
        $monto = $_POST["valor"];
    }else{
           // si no viene el usuario lo mando a login.
           header("Location: nuevomovimiento.php?error='SM'");
           exit();
    }
    
    if (isset($_POST["paciente_hc"])){
        $paciente_hc = $_POST["paciente_hc"];
    }
    
    if (isset($_POST["paciente_nombre"])){
        $paciente_nombre = $_POST["paciente_nombre"];
    }
    
    if (isset($_POST["profesional"])){
        $profesional = $_POST["profesional"];
    }
    if (isset($_POST["deriva"])){
        $deriva = $_POST["deriva"];
    }
    
    if (isset($_POST["practica"])){
        $practica = $_POST["practica"];
    }
    
    if (isset($_POST["mediopago"])){
        $mediopago = $_POST["mediopago"];
    }
    
   if(isset($_POST["observaciones"])){
    $observaciones = $_POST["observaciones"];
   }
 

    $sql = "INSERT into transac (tipo,usuarioid,valor,paciente_hc,paciente_nombre,profesional_nombre,deriva,practica,medio_pago,observaciones,sedeid) 
    values ('".$tipo."',".$usuarioid.",".$monto.",".$paciente_hc.",'".$paciente_nombre."','".$profesional."',".$deriva.",'".$practica."',".$mediopago.",'".$observaciones."',".$sedeid.")";
    $result = mysqli_query($db,$sql);
    if($result){
        //inserto ok
      header("location: /nuevomovimiento.php");   
     //  echo " query ". $sql. " ". mysqli_error($db);

    }else{
        echo "ERROR: no se pudo ejecutar la query ". $sql. " ". mysqli_error($db);
    }

  
} 


?>
