<?php
//forEACH
$meses = array(
    "janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho",
    "julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"

);
/* FOREACH simples
foreach ($meses as $mes) {
    echo "o mes é " .$mes "<br>";
}
*/

//foreach mostrando a posição do item no array
foreach ($meses as $index => $mes) {
    echo "Indice " .$index;
    echo " o mes é " .$mes."<br>";
}

?>