<?php
/**
 * Este es mi archivo de auth, verifico si existe la sesion
 *  y cuando fue el ultimo acceso y si supera los 600 ms destruyo la sesion y lo mando a login.
 */

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
            header("Location: login.php");
            exit();
        }else {
            $_SESSION["ultimoAcceso"] = $ahora;
        }
    }

   



?>