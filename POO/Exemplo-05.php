<?php
//Encapsulamento

class Pessoa {

    public $nome = "Raimundo";
    protected $idade = 48;
    private $senha = "123345";
    //protected classes herdadas e metodos tem acesso
    //private somente os metodos tem acesso

    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}

$objeto = new Pessoa();

$objeto->verDados();


?>