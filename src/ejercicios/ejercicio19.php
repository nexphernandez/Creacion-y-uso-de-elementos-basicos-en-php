<?php
$numero1 =(int) readline("Dime un numero para calcular el mcd:");
$numero2 =(int) readline("Dime otro numero para calcular el mcd:");
while($numero2 !=0){
    $resto = $numero1 % $numero2;
    $numero1 = $numero2;
    $numero2 = $resto;
}
echo "El MCD de los dos numeros es $numero1 ";
?>