<?php
$sumaPares = 0;
$sumaImpares = 0;

for ($i=0; $i <= 100; $i++) { 
    if($i % 2 == 0){
        $sumaPares += $i;
    }
    if($i % 2 != 0){
        $sumaImpares += $i;
    }
}
echo "La suma de los numeros pares da = " . $sumaPares . "\n";
echo "La suma de los numeros impares da = " . $sumaImpares . "\n";

?>