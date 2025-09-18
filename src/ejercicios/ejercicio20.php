<?php
$altura =(int) readline("Dime un numero para darle una altura al triangulo");
for ($i=1; $i <= $altura; $i++) { 
    echo str_repeat("*", $i) . "\n";
}
?>