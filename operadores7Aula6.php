<?php  

//Incrementar

$a = 10;

//Para incrementar "adicionar" valor à uma variável existente, nós usamos o operador ++.

echo $a ++;
//Note que o valor foi incrementado mas não mostrou resultado, já que nós acrescentamos valor após chamá-la.

echo "<br>";

echo $a;
//Como nós incrementamos valor na chamada anterior, se chamarmos a variável novamente, ela estará com o valor 10 + 1.

echo "<br>";

$b = 10;

echo ++ $b;
//Desta forma, antes de chamar a variável, nós incrementamos valor na mesma.

echo "<br>";

//Decremento

//Segue a mesma ideia de incrementar

echo -- $b;

?>