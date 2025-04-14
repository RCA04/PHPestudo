<?php
//while & dowhile
 
//While
/*
 $condição = true;

while ($condição) {


 $numero = rand(1, 10);

  if ($numero === 3) {

    echo " Ganhou !! ";
    $condição = false;
  }

  echo $numero . " ";
}
*/


$total = 200;
$desconto = 0.9;

do{ 
    $total *= $desconto;

} while ($total > 100);

echo $total;

?>