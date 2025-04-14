<?php
//IF, ELSELF ELSE

$qualASuaIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){

    echo "Criança";

} else if ($qualASuaIdade < $idadeMaior){

    echo "Adolescente";

} else if($qualASuaIdade < $idadeMelhor){
   
    echo "Adulto";

} else {
    echo "Idoso";
}

//operador Ternario

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"menor de idade" : "Maior de Idade";

?>