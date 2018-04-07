<?php 

//Tipos básicos

//String ou Texto

$nome = "Felipe";

//Obs: o tipo string pode ser escrito dentro de aspas simples ou duplas, mas SEMPRE dentro de algum tipo de aspas

$site = 'etc.gov.com.br';

//Tipo inteiro

$ano = 1994;

//Tipo real

$salario = 5500.99;

//Tipo boolean, lógico "false or true"

$bloqueado = false;

//Tipos compostos

//Os arrays podem armazenar vários tipos de dados numa mesma variável

$frutas = array("Abacaxi", "Laranja", "Tangerina");

/*Exemplo

$frutas[0] será igual a String "Abacaxi"
$frutas[1] será igual a String "Laranja"
$frutas[2] será igual a String "Tangerina"

*/

//Objeto será mais estudado em Programação Orientada a Objetos (POO)

/*
$nascimento = new DateTime();

var_dump($nascimento);
*/

//Tipos Especiais

//Resource será estudado mais a frente

/* $arquivo = fopen("variaveisAula2.php", "r");

var_dump($arquivo);
*/

//Nulo é ausência de valor, Vazio foi iniciado mas não tem informação

$nulo = NULL;
$vazio = "";

?>