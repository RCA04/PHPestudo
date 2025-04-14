<?php

function soma(int ...$valores):string {
    //apos o () os : passam o tipo de dado

 return array_sum($valores);


}

echo soma(2, 2);
echo "<br>";
echo soma(25, 23);
echo "<br>";
echo soma(27, 28);
echo "<br>";



?>