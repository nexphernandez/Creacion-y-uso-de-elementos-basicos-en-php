<?php
for ($i=2; $i <= 50; $i++) { 
    $esprimo = true;
    for ($j=2; $j <= i-1 ; $j++) { 
        if ($i % $j == 0) {
            $esprimo = false;
            break;
        }
    }
    if ($esprimo) {
        echo $i . "\n";
    }
}
?>