<?php
$numero1 = 0;
$numero2 = 1;

echo $numero1 ."\n";
echo $numero2 ."\n";

for ($i=0; $i <= 18; $i++) { 
    $respuesta = $numero1 + $numero2;
    echo $respuesta . "\n";
    $numero1 = $numero2;
    $numero2 = $respuesta;
}
?>