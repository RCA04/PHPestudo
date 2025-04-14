<?php

function ola(){

$argumentos = func_get_args(); // pega os parâmetros passados pra função.

 return $argumentos;

}


var_dump(ola("bom dia", 10));


?>