<?php

$frutas = Array(
    "Manzana",
    "Pera",
    "Plátano"
);

echo count($frutas) . "Items en frutas";
echo "<br>";
echo "<br>";

for ($i=0; $i<count($frutas); $i++){
    echo $frutas[$i] . ", INDEX $i<br>";
}
    
foreach($frutas as $item){
    echo $item . "<br>";
}
        
        
echo "<br>";
echo "<br>";

echo json_encode(in_array("Manzana", $frutas)); //Busca dentro de un [] un valor -> true/false
array_push($frutas, "Piña");

echo "<br>";
echo "<br>";
print_r($frutas);

array_pop($frutas); //borra el ultimo
echo "<br>";
print_r($frutas);

array_shift($frutas); //borra el primero
echo "<br>";
print_r($frutas);

array_unshift($frutas, "Uva"); //inserta en el primero
echo "<br>";
print_r($frutas);

sort($frutas); //ordena alfabeticamente
echo "<br>";
print_r($frutas);

rsort($frutas); //ordena a la inversa
echo "<br>";
print_r($frutas);


$frutas2 = Array(
    "Primero" => "Manzana",
    "Segundo" => "Pera",
    "Tercero" => "Plátano"
);
    
echo "<br>";
echo "<br>";
echo $frutas2["Primero"];


echo "<br>";
echo "<br>";
foreach ($frutas2 as $key => $value) {
    echo $key . " : " . $value . "<br>"; 
}

?>


<?php foreach($frutas2 as $key => $value): ?>
    
<div>
    <div>
        <h2>Sub h2</h2>
        <p>parrafo lkhugiuguhgiuygiuyh</p>
        <button>Enviar</button>
    </div>
</div>

<?php endforeach ?>