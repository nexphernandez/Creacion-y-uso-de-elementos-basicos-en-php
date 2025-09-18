<?php
$nota = (int) readline("¿Que nota has tenido?:");
$respuesta = "Tienes un suspenso";
if ($nota>4 && $nota<7) {
    $respuesta= "tienes un aptobado";
}
if ($nota>6 && $nota<9) {
    $respuesta = "Tienes un notable"
}
if ($nota>8) {
    $respuesta = "Tienes un sobresaliente"
}
echo($respuesta);
?>