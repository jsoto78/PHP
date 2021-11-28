
<?php 
include 'conexion.php';
 if($_SERVER["REQUEST_METHOD"] == "POST") {

    $tipo = $_POST["tipo"];
    $usuarioid = $_POST["usuarioid"];
    $sedeid = $_POST["sedeid"];
    $monto = $_POST["monto"];
    $paciente_hc = $_POST["paciente_hc"];
    $paciente_nombre = $_POST["paciente_nombre"];
    $profesional = $_POST["profesional"];
    $deriva = $_POST["deriva"];
    $practica = $_POST["practica"];
    $mediopago = $_POST["mediopago"];
    $observaciones = $_POST["observaciones"];

    $sql = "INSERT into transac (tipo,usuarioid,valor,paciente_hc,paciente_nombre,profesional_nombre,deriva,practica,medio_pago,observaciones) 
    values ('".$tipo."',".$usuarioid.",".$monto.",".$paciente_hc.",'".$paciente_nombre."','".$profesional."',".$deriva.",'".$practica."',".$mediopago.",'".$observaciones."')";
    $result = mysqli_query($db,$sql);
    if($result){
        //inserto ok
        header("location: /nuevomovimento.php");    
    }else{
        echo "ERROR: no se pudo ejecutar la query ". $sql. " ". mysqli_error($db);
    }

  
} 


?>
