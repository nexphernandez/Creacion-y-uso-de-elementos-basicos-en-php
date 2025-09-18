<?php
$numero = (int) readline("Introduce un numero para calcular el factorial:");
$respuesta = 1;
for ($i=$numero; $i > 0; $i--) { 
    $respuesta *= $i;
}
echo($respuesta);
?>