<?php
$numero = (int) readline("Dime un numero para imprimir la tabla de multiplicar:");
for ($i=1; $i <= 10; $i++) { 
    echo($numero . " x " . $i . " = " . $numero * $i . "\n");
}
?>