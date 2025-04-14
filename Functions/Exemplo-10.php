<?php
//função data

echo date("d/m/Y H:i:s");

echo '<br/>';

echo time();

echo '<br/>';
echo '<br/>';


$ts = strtotime("1989-12-01");

echo $ts;

echo '<br/>';

echo date("l, d/m/Y", 628470000)

// strtotime aceita expressão como "now", "+1 day" .

?>