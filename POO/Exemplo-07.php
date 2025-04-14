<?php
//interface

interface Veiculo{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function cambio($marcha);

}


class Civic implements Veiculo{
    public function acelerar($velocidade){
        echo "o veiculo acelerou até " . $velocidade . "km/h";
    }

    public function freiar($velocidade){
        echo "o veiculo frenou até" . $velocidade . "km/h";
    }
    
    public function cambio($marcha){
        echo "o veiculo estava engatado na" . $marcha . 'marcha';
    }
}

$carro = new Civic();

$carro->cambio(2);



?>