<?php

$numero = 2;
$numero++;
++$numero;

$saludar = "Hola mundo";
$clase_terminada = false;

$arr1 = [1, 2, true, false, "Hola"];
$arr = Array();
$arr2 = Array(1, 2, true, false, "Hola");
$arr3 = [
    1 => "Hola",
    2 => "Mundo",
];
$arr4 = array(
    1 => "Hola",
    2 => "Mundo",
);
$biblio = array(
    "ficcion" => ["l1", "l2", "l3", "l4", "l5"],
    "suspense" => ["l1", "l2", "l3", "l4", "l5"],
    "terror" => ["l1", "l2", "l3", "l4", "l5"],
);

//$numero = "Hola mundo";

$valor = $clase_terminada ? "La clase ha terminado" : "La clase no ha terminado";
$valor2 = $hola ?? $valor . "val2";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP</title>
</head>
<body>
 
<?php
echo $numero;

echo $saludar;

//echo array1;

print_r($arr1);
echo json_encode($arr1);
echo json_encode($arr1[3]);

echo "<h1>".$saludar."</h1>";

if ($clase_terminada){
    echo "<h2>La clase ha terminado</h2>";
}
elseif (!$clase_terminada){
    echo "<h2>La clase no ha terminado todavia</h2>";
}
else {
    echo "<h2>La clase no ha terminado</h2>";
}

echo "<p>".$valor."</p>";
echo "<p>".$valor2."</p>";

for($i=0; $i<count($arr2);$i++){
    //echo "<p>".$arr2[$i]."</p>";
    echo "<p>".json_encode($arr2[$i])."</p>";
}

foreach($arr4 as $item){
    echo "<p>".json_encode($item)."</p>";
}

foreach($biblio as $clave=>$valor){
    echo "<p>".json_encode($clave)."</p>";
}

foreach($biblio as $clave=>$valor){
    echo "<p>".json_encode($clave)."</p>";
    foreach($biblio[$clave] as $item){
        echo "<p>".json_encode($valor)."</p>";
    }
}



?>

</body>
</html>