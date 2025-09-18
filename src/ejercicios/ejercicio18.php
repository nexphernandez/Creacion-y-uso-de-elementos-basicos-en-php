<?php
$palabra = (string) readline("Dime una palabra para invertirla ");
$invertido = strrev($palabra);
$resultado = "La palabra " . $palabra  ." no es palindroma";
if ($palabra == $invertido) {
    $resultado = "La palabra " . $palabra  ." es palindroma";
}
echo $resultado;
?>