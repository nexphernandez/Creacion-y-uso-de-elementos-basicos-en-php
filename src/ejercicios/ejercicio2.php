<?php
$edad = (int) readline("Ingresa tu edad:");
$respuesta = "Eres menor de edad";
if ($edad>=18) {
    $respuesta= "Eres mayor de edad";
}
echo($respuesta);
?>