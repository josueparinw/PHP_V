<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
  

<?php

//
echo "EJERCICIO 1<br>";
echo "Crea un archivo PHP, que tenga diferentes variables nombre, edad y si eres estudiante (true o false). Luego muestra en la web, una frase usando esas variables.";

$nombre = "Pedro";
$edad = 23;
$estudiante = false;

echo "<h1> Hola, ".$nombre.". Tienes ".$edad." años y es '".json_encode($estudiante)."' que eres estudiante</h1>";

//
echo "EJERCICIO 2<br>";
echo "Usando un bucle for, muestra los números del 1 al 20. Si el número es par, además de mostrar el valor también tendrás que poner que el número es par.";

//PHP_EOL
for($i=0; $i<=20; $i++){
    if($i%2==0){
        echo "<h4>".$i." par</h4>";
    }
    else {
        echo $i;
    }
}

//
echo "EJERCICIO 3<br>";
echo "Crea una página HTML con PHP que muestre una table.

El usuario debe de definir una variable con un array con valores los cuales deberán de aparecer como elementos de la tabla.
Tú decides como se llamarán las columnas, la cantidad de columnas y los valores.";

$animales = ["ardilla", "burro", "caracol", "foca"];

?>
<table border=1>

    <thead>
        <tr>
            <th>Animal</th>
            <th>Nro de letras</th>
        </tr>
    </thead>
    
    <tbody>

    <?php
        foreach($animales as $animal){
    ?>
        <tr>
            <td><?php echo $animal ?></td>
            <td><?php echo strlen($animal) ?></td>
        </tr>
    <?php
        }
    ?>

    </tbody>
</table>

<?php
echo "<br>EJERCICIO 4 <br>";
echo "Crea una página HTML con PHP que muestre una tabla de multiplicar (etiqueta table). <br>El usuario debe de definir una variable \$número. Por ejemplo, \$número = 5. Usa un for para generar las filas de la tabla HTML.";

$numeroTabla = 7;
?>
    <table border=3>
        <thead>
            <tr>
                <th>Multiplicación</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for($i=1; $i<10; $i++){
                ?>
            <tr>
                <td><?php echo $numeroTabla ." x ". $i?></td>
                <td><?php echo $numeroTabla*$i ?></td>

            <?php
            }
            ?>
            </tr>
        </tbody>
    </table>

</body>
</html>