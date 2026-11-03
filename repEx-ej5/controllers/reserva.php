<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $personas = $_POST['personas'];
    $preferencia = $_POST['preferencia'];

    $allData = true;

    if (!$nombre || !$email || !$fecha || !$personas || !$preferencia){
        $allData = false;
        //redirect("index", "campos")
        header("Location: ../index.php?error=campos");
        exit();
    }
    elseif ($personas<1 || $personas>10) {
        $allData = false;
        header("Location: ../index.php?error=personas");
        exit();
    }
    elseif ($preferencia!=="interior" && $preferencia!=="terraza") {
        $allData = false;
        header("Location: ../index.php?error=preferencia");
        exit();
    }

    if ($allData){
        $_SESSION["nombre"] = $nombre;
        $_SESSION["email"] = $email;
        $_SESSION["fecha"] = $fecha;
        $_SESSION["personas"] = $personas;
        $_SESSION["preferencia"] = $preferencia;
        $_SESSION["sesionActiva"] = true;

        header("Location: ../confirmacion.php");
        exit();
    }

}
else {
    //redirect("index", "403")
    header("Location: ../index.php?error=403");
    exit();
}

?>