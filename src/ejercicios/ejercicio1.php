<?php
$numero1 = (int) readline("Ingresa un numero:");
$numero2 = (int) readline("Ingresa otro numero:");
$respuesta = "Los numero son iguales";
if ($numero1>$numero2) {
    $respuesta= "El numero mayor es: " . $numero1;
}
if ($numero1<$numero2) {
    $respuesta="El numero mayor es: " . $numero2;
}
echo($respuesta);
?>