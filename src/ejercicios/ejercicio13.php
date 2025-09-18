<?php
$numero = (int) readline("Dime un numero:");

for ($i=1; $i <= 100; $i++) { 
    $respuesta = $numero *$i;
    if($respuesta>100){
        break;
    }
    echo $respuesta . "\n";
}
?> 