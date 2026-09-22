<?php

$numero1 = 10;
$numero2 = 20;

echo $numero1 + $numero2;
echo "<br>";
echo $numero1 - $numero2;
echo "<br>";
echo $numero1 * $numero2;
echo "<br>";
echo $numero1 / $numero2;
echo "<br>";
echo $numero1 ** $numero2;
echo "<br>";
echo $numero1 % $numero2;
echo "<br>";
echo $numero1 *= $numero2;
echo "<br>";
echo $numero1 -= $numero2;
echo "<br>";
echo $numero1 += $numero2;
echo "<br>";
//$numero2++;
echo "<br>";
$numero1 /= $numero2;
echo "<br>";

/*OPERADORES LÓGICOS
== Igualación (comprueba valores)
=== Igualación (comprueba valores y tipo)
!= No es igual (comprueba valores)
!== No es igual (comprueba valores y tipo)

> >= < <=

&& and
|| or
! not -> El contrario del resultado del boolean

++ incremento
-- decremento

. concatenación

?? Null Coalescing
? : Lógica ternaria

*/

$numero3 = 12;
// Si numero4 es null o no existe, entonces numero5 va a tener asignado el valor se numero3
$numero5 = $numero4 ?? $numero3; //12
$numero6 = $numero1 ?? $numero5; //10

// ? :
if ($numero1 < $numero5){
    echo "Número 1 es menor";
}
else {
    echo "Número 5 es menor";
}

echo "<br>";
echo $numero1 < $numero5 ? "Número 1 es menor":"Número 5 es menor";

echo "<br>";
echo $numero1+$numero2 > 30 ? true : false;
echo "<br>";
echo $numero1+$numero2 > 30;
echo "<br>";

if ($numero1 + $numero2 > 30){}
elseif ($numero1 + $numero2 <=30) {}
else {}

switch ($numero1 + $numero2){
    case 30:
        echo "Es 30";
        break;
    case 40:{
        echo "Es 40";
        break;
    }
    case 50:
        echo "Es 50";
        break;
    default:
        echo "No es ninguno";
        break;
}

echo match ($numero1 + $numero2) {
    30 => "Es 30",
    40 => "Es 40",
    50 => "Es 50",
    default => "No es ninguno"
}

?>