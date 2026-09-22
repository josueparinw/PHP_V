<?php
/*
 * EJERCICIO 1
 * 
 * --------------------------- 
 * 
 * Crea un programa en PHP que controle el acceso de una persona a un gimnasio.
 * El programa debe tener las siguientes variables:
 * - Nombre de la persona
 * - Edad
 * - Típo de membresía (basic, premium o vip)
 * - Si tiene la cuota pagada
 * - Hora actual
 * 
 * El programa debe de comprobar
 * 1. La persona debe tener al menor 16 años
 * 2. Debe tener la cuota pagada 
 * 3. Si la membresía es basic, solamente puede acceder entre las 08:00 y las 18:00
 * 4. Si es premium puede acceder entre las 07:00 y las 21:00.
 * 5. Si es vip, puede acceder durante todo el horario de apertura, de 06:00 a 23:00
 *
 * Si puede acceder, muestra un mensaje indicando su nombre y tipo de membresía.
 * S no puede acceder, muestra el motivo por el que se le ha denegado el acceso.
 *
 * Condición: Utiliza operadores lógicos para combinar las diferentes condiciones
 *
 * */ 

$nombre = "Carlos";
$edad = 31;
$tipo_membresia = "Vip"; //basic, premium, vip
$cuota_pagada = True;
$hora_actual = 22;

echo "EJ 1<br>";
if ($edad<18) echo "Menor de 16 años";
elseif (!$cuota_pagada) echo "Cuota no pagada";
else {
    switch($tipo_membresia){
        case "Basic":
            echo (8<$hora_actual && $hora_actual<18) ? $nombre.": ".$tipo_membresia : "Fuera de horario";
            break;
        case "Premium":
            echo (7<$hora_actual && $hora_actual<21) ? $nombre.": ".$tipo_membresia : "Fuera de horario";
            break;
        case "Vip":
            echo (6<$hora_actual && $hora_actual<23) ? $nombre.": ".$tipo_membresia : "Fuera de horario";
            break;
        default:
            echo "Membresía invalida";
            break;
    }
}

/*
 * EJERCICIO 2
 *
 * ---------------------------
 *
 * Una tienda online quiere determinar las condiciones de envío de un pedido.
 * 
 * Crea las siguientes variables:
 * - Nombre del cliente
 * - Importe de la compra
 * - Si el cliente es miembro (true / false)
 * - Código de descuento introducido por el cliente (esto hacedlo manual)
 * 
 * El programa debe de aplicar las siguientes reglas
 * 
 * Envío: 
 * 1. Si la compra es igual o superior a PRECIO_ENVIO (el valor es 100), el envío es gratuito
 * 2. Si es inferior a PRECIO_ENVIO, el envío cuesta 6.90€.
 * 3. Si el cliente es miembro, no tendrás en cuenta el PRECIO_ENVIO y el envío siempre será gratuito.
 *
 *Descuento:
 *  Si el código introducido es.
 * - "WELCOME10"            -> 10% de descuento
 * - "VIP20"                -> 20% de descuento
 * - "SUMMER15"             -> 15% de descuento
 * - Cualquier otro código  -> sin descuento
 * - Si no se introduce ningún código, debe de utilizarse un valor por defecto haciendo uso de ??.
 *
 * El programa debe de mostrar (Ejemplo de salida):
 * - Cliente: Carlos
 * - Compra: 125€
 * - Código de descuento: VIP20
 * - Descuento: 20%
 * - Coste del envío: 0€
 * - Total: 100€
 *
 *
 * IMPORTANTE: Primero se aplica el descuento y después se calcula el envío
 * */ 


const PRECIO_ENVIO = 100;


$nombre_cliente = "Felipe";
$importe = 80;
$es_miembro = false;
$codigo_descuento = "WELCOME10";

$envio=0;
$dscto=0;

if (!$es_miembro){
    ($importe >= PRECIO_ENVIO) ? $envio=0 : $envio=6.9; //$importe+=0 : $importe+=6.9;
}
else {
    $envio=0;
    //$importe+=0;
}

match ($codigo_descuento) {
    "WELCOME10" => $dscto=10, //$importe-=(0.10*$importe),
    "SUMMER15" => $dscto=15, //$importe-=(0.15*$importe),
    "VIP20" => $dscto=20, //$importe-=(0.20*$importe),
    default => $dscto=0 //$importe-=0
};

echo "<br><br>";
echo "EJ 2<br>";
echo "- Cliente: ".$nombre_cliente."<br>";
echo "- Compra: ".$importe."€"."<br>";
echo "- Código de descuento: ".$codigo_descuento."<br>";
echo "- Descuento: ".$dscto."%<br>";
echo "- Coste del envío: ".$envio."€<br>";
echo "- Total: ". ($importe*(100-$dscto)/100) +$envio."€";


/*Ejercicio 3
Una empresa de transporte quiere calcular el precio de un viaje dependiendo del tipo de transporte utilizado.

Crea las siguientes variables:
- Nombre del cliente.
- Tipo de transporte.
- Distancia recorrida en kilómetros.

Los posibles transportes son:
- bus
- tren
- taxi
- bici

Utiliza match para determinar el precio por kilómetro:
Transporte	Precio por km
- bus	            0.20 €
- tren         	    0.15 €
- taxi	            1.20 €
- bici	            0.05 €


El programa debe calcular el precio total.

Además, existen estas condiciones:
. Si el viaje supera los 50 km, se aplica un descuento del 10 %.
. Si supera los 100 km, se aplica un descuento del 20 %.
. Si la distancia es 0 o negativa, debe mostrarse un error.
. Si el transporte no existe, debe mostrarse un mensaje indicando que el transporte no es válido.


Finalmente, muestra algo similar a (ejemplo de salida):
- Cliente: Marta
- Transporte: tren
- Distancia: 120 km
- Precio por km: 0.15 €
- Precio inicial: 18 €
- Descuento: 20 %
- Precio final: 14.40 €

Para el transporte debes utilizar match, no switch.*/

echo "<br><br>";
echo "EJ 3<br>";

$nombre_cliente;
$tipo_transporte;
$distancia_recorrida;

?>