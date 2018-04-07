<?php 

//Criando uma variável fora de uma função necessita ser chamada com a palavra reservada "global"

$nome = "Felipe<br>";

function teste()
{
	global $nome;
	echo $nome;
}

//Atribuição de uma variável de mesmo nome dentro de um escopo não conflita com uma variável em outro escopo, ou fora da mesma.

function teste2()
{
	$nome = "Brigagão de Almeida";
	echo $nome . " Teste 2";
}

teste();
teste2();

?>