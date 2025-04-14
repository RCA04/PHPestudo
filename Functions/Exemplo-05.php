<?php
//diferenças de passagem de parâmetros


$a = 10;

function troca($a){

 $a += 50;

 return $a;
    

}

echo troca($a);

echo "<br>";

echo $a;



//passagem de função por referencia
/*

Aqui a alteração ocorre na variavel devido ao & que precede
o parâmetro passado.

$a = 10;

function troca(&$a){

 $a += 50;

 return $a;
    

}

echo troca($a);

echo "<br>";

echo $a;


*/




?>