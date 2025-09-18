<?php
$numero = (int) readline("Dime un numero para verificar si es un numero perfecto ");
$suma = 0;
$resultado = "El numero no es perfecto";
for ($i=1; $i <$numero ; $i++) { 
    if($numero % $i == 0){
        $suma += $i;
    }
}
if ($suma == $numero) {
    $resultado = "El numero es perfecto";
}
echo $resultado;
?>