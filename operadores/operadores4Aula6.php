<?php 

//Valores lógicos, verifica se uma variável é maior que outra, quando se trata de valores inteiros, POR EXEMPLO!

$a = 30;
$b = 55;

//Verificando se a variável $a é maior que $b.

var_dump($a > $b);

echo "<br>";

//Verificando se a variável $a é menor que $b.

var_dump($a < $b);

echo "<br>";

//O valor "=" em PHP é para atribuição de valor, como mostra o exemplo abaixo.

var_dump($a = $b);
//A variável $a recebeu e sobrescreveu no resultado o valor atribuido de $b.

echo "<br>";

//Para verificarmos se duas variáveis tem o mesmo valor, é usado "==".

var_dump($a == $b);
//Note que o resultado está sendo "true", isso se deve ao fato de $a estar recebendo o valor de $b, ou seja, os dois tem os mesmos valores.

echo "<br>";

$c = 77.0;
$d = 77;

//Para verificarmos se as variáveis tem uma igualdade de identidade, ou tipo.

var_dump($c === $d);
//No caso é false, já que a variável $c é real e a $d é inteiro.

echo "<br>";

//Para verificarmos se as variáveis tem uma diferença de valor.

var_dump($a != $b);
//O resultado é false, já que o valor das duas variáveis estão iguais, devido o código da linha 29.

echo "<br>";

//Para verificarmos se as variáveis tem uma diferença de entidade, ou tipo.

var_dump($c !== $d);
//O resultado é true, já que o tipo das variáveis são diferentes.

?>