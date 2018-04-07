<?php  

$nome = "felipe brigagao";

//Transformando toda string recebida na variável em maíusculo.

$nome =  strtoupper($nome);

echo $nome;
echo "<br>";

//Transformando toda string recebida na variável em minusculo.

$nome = strtolower($nome);

echo $nome;
echo "<br>";

//Transformando a primeira letra da primeira palavra em maíusculo.

$nome = ucfirst($nome);

echo $nome;
echo "<br>";

//Transformando as primeiras letras das palavras em maíusculo.

$nome = ucwords($nome);

echo $nome;

?>