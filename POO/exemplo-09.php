<?php
//polimorfismo
abstract class Animal{

    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal {

    public function falar(){
        return "late";
    }
}

class Gato extends Animal{
    public function falar(){
        return "Mia";
    }

}

class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }
    public function mover(){
        return "Voa" . parent::mover();
    }

}



$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

$garfield = new Gato();
echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

$sabia = new Passaro();
echo $sabia->falar() . "<br/>";
echo $sabia->mover() . "<br/>";




?>