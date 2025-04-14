<?php
//operadores

/*
// operador de concatenção/string

$nome = "joao";
echo $nome . " mais que tudo<br>";

//aqui ele junta a variável mais o texto

//operador composto de string e de + 
$nome .= " TREINAMENTOS";
echo $nome;

// aqui ele alega que TEM a variável e mais alguma coisa ou acrescenta
*/

/*
//operadores de atribuição
$valorTotal = 0;
// valor normal da variável
$valorTotal += 100;

$valorTotal += 25;
// tipo de SOMA da variável
$valorTotal -= 10;
// tipo de Subtração da variável
$valorTotal *= .9;
//tipo de subtração em % da variável

echo $valorTotal
*/


//operadores aritmeticos
/*
$a = 10;
$b = 2;

echo $a + $b;
//realiza a soma
echo "<br>";

echo $a - $b;
//realiza a subtração
echo "<br>";

echo $a * $b;
//realiza a multiplição
echo "<br>";

echo $a / $b;
//realiza a divisão
echo "<br>";

echo $a % $b;
//realiza a divisão e pega somente o módulo ou o resto da divisão
echo "<br>";

echo $a ** $b;
//realiza a exponenciação
*/

/*
//operadores  de comparação

$a = 30;

$b = 55;

var_dump ($a > $b);

echo "<br>";

var_dump ($a < $b);

echo "<br>";

var_dump($a = $b); // operdar de atribuição

echo "<br>";

var_dump($a == $b); // operador de igualdade de VALOR

echo "<br>";

var_dump($a === $b); // operador de igualdade de IDENTIDADE  

echo "<br>";

var_dump($a != $b);

echo "<br>";

var_dump($a !== $b);

echo "<br>";

var_dump($a !=== $b);
*/
/*
//operador spaceship
$a = 50;
$b = 35;

var_dump($a <=> $b); // operador spaceship aonde < traz 1 se o A for maior
// = traz 0 se A e B forem igual e > traz -1 se B for maior 
*/

/*
//operador NULL collection
$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;
// o ?? tem a responsabilidade de checar se a variavel é vazia se for 
// passa para a proxima até que chegue em uma que não seja nula 
*/

/*
//operadores de incremento de decremento

//operador de incremento
$a= 10;

echo $a++; //adiciona para ser mostrado depois
echo ++$a; //adiciona para ser mostro antes

echo "<br>";

echo $a;

echo "<br>";

//operador decremento
echo --$a;
*/

/*
//operador logico

//operador logico && necessita que ambas condições sejam verdadeiras

$resultado = (10 + 3) / 2 >5 && 10 + 5 < 3;

//operador logico || necessita que somente uma das condições sejam verdadeiras

$resultado = (10 + 3) / 2 >5 || 10 + 5 < 3;

var_dump($resultado);

*/
?>