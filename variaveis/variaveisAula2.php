<?php 

//Importante sempre usar o camelCase!

$anoNascimento = 1994;

//Concatenação, ou seja, juntar duas variáveis ou valores em geral, usamos o " . "

$nome = "Felipe";
$sobrenome = "Brigagão de Almeida";

$nomeCompleto = $nome . " " . $sobrenome . "<br>";

//Imprimindo a concatenação do $nomeCompleto

echo $nomeCompleto;

/* Errado! Variáveis não podem começar com números
$1nome = "Felipe";
*/

/* Errado! não pode declarar variavéis com nomes reservados
$this = ;
*/

//Como "chamar" as variáveis

echo $anoNascimento;

echo '<br>';

/*Como "excluir" uma variável

unset($anoNascimento);

echo $anoNascimento;
*/

//Se a variável existir...

if (isset($anoNascimento))
{
	echo $anoNascimento;
}


?>