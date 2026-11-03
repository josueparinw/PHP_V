<?php

require "datos.php";

// Escribe aquí la lógica y los cálculos (antes del HTML)

$suspensos=0;
if ($notaServidor<5){
    $suspensos++;
}
if ($notaCliente<5){
    $suspensos++;
}
if ($notaDespliegue<5){
    $suspensos++;
}
if ($notaInterfaces<5){
    $suspensos++;
}
if ($notaEmpresa<5){
    $suspensos++;
}


$masAlta = $notaServidor;
$modMasAlto = "Desarrollo Web en Entorno Servidor";

if($masAlta<$notaCliente){
    $masAlta=$notaCliente;
    $modMasAlto = "Desarrollo Web en Entorno Cliente";
}
if($masAlta<$notaDespliegue){
    $masAlta=$notaDespliegue;
    $modMasAlto = "Despliegue de Aplicaciones Web";
}
if($masAlta<$notaInterfaces){
    $masAlta=$notaInterfaces;
    $modMasAlto = "Diseño de Interfaces Web";
}
if($masAlta<$notaEmpresa){
    $masAlta=$notaEmpresa;
    $modMasAlto = "Empresa e Iniciativa Emprendedora";
}


$masBaja = $notaServidor;
$modMasBajo = "Desarrollo Web en Entorno Servidor";

if($masBaja>$notaCliente){
    $masBaja=$notaCliente;
    $modMasBajo = "Desarrollo Web en Entorno Cliente";
}
if($masBaja>$notaDespliegue){
    $masBaja=$notaDespliegue;
    $modMasBajo = "Despliegue de Aplicaciones Web";
}
if($masBaja>$notaInterfaces){
    $masBaja=$notaInterfaces;
    $modMasBajo = "Diseño de Interfaces Web";
}
if($masBaja>$notaEmpresa){
    $masBaja=$notaEmpresa;
     $modMasBajo = "Empresa e Iniciativa Emprendedora";
}

$notaMedia = round(($notaServidor+$notaCliente+$notaDespliegue+$notaInterfaces+$notaEmpresa)/5, 2);


$resultado = "";
if ($notaServidor>=5 && $notaCliente>=5 && $notaDespliegue>=5 && $notaInterfaces>=5 && $notaEmpresa){
    $resultado = "APROBADO";
}
elseif($notaMedia>=5 && ($notaServidor>4 && $notaCliente>4 && $notaDespliegue>4 && $notaInterfaces>4 && $notaEmpresa>4)){
    $resultado = "PENDIENTE DE RECUPERACIÓN";
}
else {
    $resultado = "SUSPENDIDO";
}


$estado = "";
match (true) {
    $notaMedia>7 => $estado="Notable",
    $notaMedia>=5 => $estado="Bien",
    $notaMedia<5 => $estado="Insuficiente",
    default => $estado="nada"
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletín de notas</title>
    
</head>
<body>

    <!-- Escribe aquí el HTML del boletín -->
    <section class="boletin">
    <h1>Boletín de notas · 2º DAW</h1>
    <p>Alumno: <?= $alumno ?></p>
    <div class="tabla">

        <table border=2>
            <thead>
                <tr>
                    <th>Modulo</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Desarrollo Web en Entorno Servidor</td>
                    <td><?= $notaServidor ?></td>
                </tr>
            
                <tr>
                    <td>Desarrollo Web en Entorno Cliente</td>
                    <td><?= $notaCliente ?></td>
                </tr>
            
                <tr>
                    <td>Despliegue de Aplicaciones Web</td>
                    <td><?= $notaDespliegue ?></td>
                </tr>
            
                <tr>
                    <td>Diseño de Interfaces Web</td>
                    <td><?= $notaInterfaces ?></td>
                </tr>
            
                <tr>
                    <td>Empresa e Iniciativa Emprendedora</td>
                    <td><?= $notaEmpresa ?></td>
                </tr>
            
            </tbody>

        </table>

        <p>Módulos suspensos: <b><?= $suspensos ?></b></p>
        <p>Nota más alta: <b><?= $modMasAlto ?> (<?=$masAlta?>) </b></p>
        <p>Nota más baja: <b><?= $modMasBajo ?> (<?=$masBaja?>) </b></p>
        <p>Nota media: <b><?= $notaMedia ?> · <?=$estado?> </b></p>

        <h1><?= $resultado ?></h1>
    </div>
    </section>

</body>
</html>
