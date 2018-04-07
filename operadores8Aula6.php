<?php  

//Condicionais

// && - "e" Somente será verdade se os dois valores forem verdade.

$resultado1 = (10 + 3) / 2 > 5 && 10 + 5 < 20;

var_dump($resultado1);

echo "<br>";

// || - "ou" Se pelo menos uma for verdadeira o resultado será verdade

$resultado2 = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado2);

?>