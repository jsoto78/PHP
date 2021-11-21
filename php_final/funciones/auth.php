<?php


session_name();
session_start();

if ($_SESSION["auth"] != "SI") {

    header("Location: login.php");
    exit();

} else {
    $fechaGuardada = $_SESSION["ultimoAcceso"];
    $ahora = date("Y-n-j H:i:s");
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
    if($tiempo_transcurrido >= 600) {
        session_destroy();
        header("Location: $root");
    }else {
        $_SESSION["ultimoAcceso"] = $ahora;
    }
}
?>