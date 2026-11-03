<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso Examen</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
echo "<h2>ej 1.1</h2>";
for($i=1; $i<=100; $i++):
    if ($i%5==0 && $i%3==0) echo $i ." FizzBuzz <br>";
    elseif ($i%3==0) echo $i ." Fizz <br>";
    elseif ($i%5==0) echo $i ." Buzz <br>";
    else echo $i ."<br>";
endfor;


echo "<h2>ej 1.2</h2>";
for($i=2; $i<=100; $i++): //INICIA EN 2 PORQUE 1 NO ES PRIMO
    $esPrimo = True;

    for ($j=2; $j<=($i**0.5); $j++):
        if ($i%$j==0) $esPrimo=False;
    endfor;

    if ($esPrimo) echo $i."<br>";
endfor;


echo "<h2>ej 1.3</h2>";
$altura = 5;
for ($i=0; $i < $altura; $i++):
    for($j=0; $j<=$i; $j++):
        echo "*";
    endfor;
    echo "<br>";
endfor;


echo "<h2>ej 2.1</h2>";
$alumnos = [
    ["nombre" => "Clara", "nota" => 6.7],
    ["nombre" => "Ana", "nota" => 7.5],
    ["nombre" => "Sofia", "nota" => 5.5],
    ["nombre" => "Daniela", "nota" => 9],
    ["nombre" => "Camila", "nota" => 4.2],
    ["nombre" => "Pamela", "nota" => 3.8]
];

foreach($alumnos as $alumno):
    echo $alumno["nombre"] ."<br>";
    echo $alumno["nota"] ."<br>";

    echo match (true) {
        $alumno["nota"] >= 9 => "Sobresaliente",
        $alumno["nota"] >= 7 => "Notable",
        $alumno["nota"] >= 5 => "Aprobado",
        $alumno["nota"] < 5 => "Suspenso",
        default => "nadota"
    };
    echo "<br>";
    echo "<br>";
endforeach;

echo "<h2>ej 2.2</h2>";
foreach ($alumnos as $a):
    if ($a["nota"]<5) echo $a["nombre"]." : ".$a["nota"]."<br>";
endforeach;
echo "<br>";


echo "<h2>ej 2.3</h2>";
$suma = 0;
foreach($alumnos as $a):
    $suma += $a["nota"];
endforeach;
echo "El nota media de la clase es: ".$suma/count($alumnos);


echo "<h2>ej 2.4</h2>";
$mayor = 0;
$aMayor = "";
$menor = 10;
$aMenor = "";
foreach($alumnos as $a):
    if ($a["nota"] > $mayor){
        $mayor=$a["nota"];
        $aMayor = $a["nombre"];
    }
    if ($a["nota"] < $menor) {
        $menor=$a["nota"];
        $aMenor = $a["nombre"];
    }
endforeach;
echo "La nota más alta es de ".$aMayor." y la más baja es de ".$aMenor;


echo "<h2>ej 2.5</h2>";
?> <section> <?php
foreach ($alumnos as $a) {
    ?>
    <div class="tarjeta">
        <h3><?= $a["nombre"] ?></h3>
        <h4><?= $a["nota"] ?></h4>
    </div>
    <?php
}
?> </section> <?php


echo "<h2>ej 3.1</h2>";
function calcularDescuento($precio, $porcentaje): float{
    if ($porcentaje>100 || $porcentaje<0) return $precio;
    else return $precio * (100-$porcentaje)/100;
}
echo calcularDescuento(100, 20)."€";


echo "<h2>ej 3.2</h2>";
function contarVocales($texto): int{
    $vocales = Array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U");
    $cont = 0;
    for($i=0; $i<strlen($texto); $i++){
        if (in_array($texto[$i], $vocales) ) $cont++;
    }
    return $cont;
}
echo "La palabra tiene ".contarVocales("EqUis")." vocales";


/*
function contarVocales($texto): int {
    $vocales = ["a", "e", "i", "o", "u",
                "á", "é", "í", "ó", "ú"];
    $cont = 0;
    $texto = mb_strtolower($texto);

    for($i=0; $i<mb_strlen($texto); $i++){
        if (in_array(mb_substr($texto, $i, 1), $vocales)) {
            $cont++;
        }
    }

    return $cont;
}
*/

echo "<h2>ej 3.3</h2>";
function resumir($texto, $limite): string {
    if (strlen($texto) > $limite){
        return str_split($texto, $limite)[0]."...";
    }
    else return $texto;
}
echo resumir("articulo", 3);


echo "<h2>ej 4</h2>";


?>
</body>
</html>