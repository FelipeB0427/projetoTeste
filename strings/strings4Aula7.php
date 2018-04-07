<?php

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

//"strpos", ele procura dentro da variável uma palavra ou letra, e retorna em inteiro a posição indicada pelo indice da variável.

$q = strpos($frase, $palavra);
//Retornado um int(19), indicando que do começo da string "A"(0) até o final de "mãe " (contando o espaço) é (19).

var_dump($q);
echo "<br>";

//"substr", ele retorna a string até uma posição indicada previamente.

$texto = substr($frase, 0, $q);
//Retornando uma string "A repetição é a ", indicando que do começo 0, ou "A", até a variável $q que foi atribuido "mãe " em diante não será mostrado.

var_dump($texto);
echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
//Retornando uma string " da retenção", indicando que do começo é $q, ou " ", até o final da string $q que foi atribuido "mãe " não será mostrado, "strlen", irá mostrar o tamanho "len = lenght" em inteiro da string atribuida na variável, retornando string(15), contando as letras "'mãe' = 4" e "' da retenção' = 11".
 
var_dump($texto2);


?>