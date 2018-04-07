<?php  

$empresa = "+ Saúde";

//"str_replace" altera valores de uma variável STRING, ("qual valor", "substituir por", "qual variável").

$empresa = str_replace("e", "3", $empresa);
$empresa = str_replace("a", "4", $empresa);

echo $empresa;

?>