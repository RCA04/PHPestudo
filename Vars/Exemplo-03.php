<?php

/*
$nome = "nome"
// as "" ele verifica se é uma variável antes ou interpola variavel
$nome2 = 'teste';
// as '' apenas escreve como texto mesemo que seja "uma variavel"
*/

/*
//funções uteis em string

//deixar texto em maísculo

$nome = "joao";

$nome = strtoupper($nome);

echo '<br>'

//deixar texto em minuscolo
echo strtolower($nome);

//deixar apenas as primeiras letra de cada palavra em maisculo
echo ucwords($nome);

//deixar Somente a primeira letra em maisculo

echo ucfirst($nome);
*/

/*
//alterar o interior da string
$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa );
$empresa = str_replace("e", "3", $empresa );

echo $empresa;
*/

/*
//encontrar a posição de certa palavra no texto
$frase = "O pecado recaí sobre os obstruídos";

$q = strpos($frase, "pecado");
$palavra = "pecado";
// strpos(variavelAlvo, "parte da string que desejo encontar");

$texto= substr($frase, 0, $q);
// substr(variavel do texto, de onde vou procurar no texto, ate aonde)

$texto2 = substr($frase, $q);
// ele passa a mostar somente a partir da palavra porcurei
// para ele mostar após a palavra que procurei na linha 45
// é necessario utilizar o strlen
//exemplo ficaria:
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));


var_dump($texto2);
*/

?>