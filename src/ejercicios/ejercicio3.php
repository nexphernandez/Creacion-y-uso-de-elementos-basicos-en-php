<?php
$numero = 18;
$respuesta = "El numero es positivo";
if ($numero<0) {
    $respuesta= "El numero es negativo";
}
if ($numero ==0) {
    $respuesta = "El numero es cero";
}
echo($respuesta);
?>