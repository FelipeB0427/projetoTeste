<?php

//NULL COALESCING  

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;
//Compara valores nulos, se a variável for nula, ele ignora.

?>