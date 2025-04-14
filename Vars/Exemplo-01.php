<?php
/*
 Exemplo 1 criação de variável
$nome = "Exemplo Hcode";

echo $nome;

Exemplo 2 mostar o tipo de dado e seu tamanho e exibir ele 

var_dump($nome);

*/

//Exemplo 3

/* concatenação
$var1 = "joaozinho";
$var2 = "silva";
$nomeCompleto = $var1 . $var2;

// oque define a concatenação é o .



//tipos de dados básicos
//dado tipo string
$nome = "algoAí";
$site = "www.algoAí.com.br";
//dado tipo número
$ano = 2000;
//dado tipo número com ponto flutuante
$salario= 2500.99;
//dado tipo booleano
$bloqueado= false;
/////////////////////////////////////////////////////////////////////////////////////////

//dados tipo composto
$frutas = array("abacaxi", "laranja", "manga");
//chamando um item da array
//echo $frutas[ //posição do item// 2];
//////////////////////////////////////////////////
//tipo especial
$arquivo = fopen ("exemplo-01.php", "r");
//var_dump($arquivo);

//tipo nulo
$nulo = null; //tipo nulo não contem nada e não ocupa espaço
$vazio = ""; // tipo vazio existe ocupa espaço, porém contem nada
*/

//exemplo 4 
//variaveis arrays super globais

//$nome = $_GET["a"]; // ele pega todas as informações
                    //vias get(requisição) ou url
// $nome = (int)$_GET["a"] os parenteses especificam qual tipo de
// dado eu quero converter já que o comando GET/POST recebe somente string

//var_dump($nome);

/*pegar ip do usuário
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;*/

/*pegar o LOG do usuário
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;
*/

//Exemplo 5
//variáveis em função

$nome = "Glauco";

function teste() {

//$nome não é reconhecida dentro do escopo sem o comando
//global que tem a função de "chamar" a variavel para dentro do escopo
    global $nome;
    echo $nome;
}

function teste2(){

    $nome = "joao";
    echo " " . $nome . "teste 2 papai";
    
}

teste();
teste2();

?>