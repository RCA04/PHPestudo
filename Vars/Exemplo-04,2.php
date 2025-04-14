<?php

/*
Require exige a existencia do arquivo e para a execução caso ele contenha
um erro

já o include ele tenta executar mesmo que o arquivo não exista


também existe a variação que faça com que eles chamem uma determinada
função somente uma vez evitando erros.
exemplo:
 include_once
 require_once


*/

include "exemplo-04.php";

$resultado = somar(10, 20);

echo $resultado;

?>