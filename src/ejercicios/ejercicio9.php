<?php
$numero = 11;
for ($i=0; $i < 11; $i++) { 
    $numero --;
    if($numero == 0){
        $numero="¡Fin!";
    }
    echo($numero . "\n");
}
?>