<?php
//Metodos magicos/ Construtor
// começam com _ _

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

public function __construct($logradouro, $numero, $cidade){

    $this->logradouro = $logradouro;
    $this->numero = $numero;
    $this->cidade = $cidade;

 }
 public function __destruct(){ // ultima coisa a ser chamada para liberar memoria

    //var_dump("DESTRUIR");

 }

 public function __toString(){ //converte pra string

    return $this->logradouro. " , ".$this->numero.". ".$this->cidade;

 }

}

$meuEndereco = new Endereco("Rua 11", "30", "VP PQ5");
var_dump($meuEndereco);
echo $meuEndereco;

?>