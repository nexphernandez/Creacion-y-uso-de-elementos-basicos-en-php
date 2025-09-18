<?php
$numero = (int) readline("Dime un numero para invertir sus digitos ");
$numeroStr = strval($numero);
$invertidoStr = strrev($numeroStr);
$invertido = (int) $invertidoStr;
echo $invertido;
?>