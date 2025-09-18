<?php
$numero_aleatorio = random_int(1,20);
$numero = (int) readline("Dime un numero entr el 1 y el 20 a ver si lo adivinas: ");
$respuesta = "Fallaste, el numero era : " . $numero_aleatorio . "\n";
if ($numero == $numero_aleatorio) {
    $respuesta = "¡Acertaste!, el numero es: " . $numero . "\n";
}
echo $respuesta;
?>