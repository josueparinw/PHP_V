<?php

// /**/
echo "<h1 class='mb-3'>Hola mundo </h1>";

/*Tipos de datos: boolean, string, integer, arrays, arrrayLists*/

$mensaje = "Hola ";

echo $mensaje . "Camilo, edad ". 28;
$bool_val = true;
$edad = 28;
$altura = 1.5;

echo "<br>";
echo print($mensaje);

echo "<br>";

$frutas =  ["manzana", "pera", "naranja"];
$frutas2 = Array("plátano", "fresa", "manzana");

// echo $frutas; ERROR

print_r($frutas);
echo "<br>";
echo $frutas[0];

$usuario_logged = null;
echo "<br>";
echo "<br>";

echo gettype($mensaje);
echo "<br>";
echo gettype($usuario_logged);
echo "<br>";
echo gettype($altura);
echo "<br>";
echo gettype($frutas);
echo "<br>";
echo gettype($frutas[0]);
echo "<br>";
echo gettype($frutas2);
echo "<br>";
echo "<br>";

$numero = "123.45678";

$integro = (int)$numero;
echo $integro;
echo "<br>";

$decimal = (float)$numero;
echo $decimal;
echo "<br>";

$doble = (double)$numero;
echo $doble;
echo "<br>";

echo "<br>";

?>