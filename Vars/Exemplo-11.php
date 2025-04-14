<?php

//convertendo para json

$pessoas = array();

array_push($pessoas, array (
    'nome'=> 'João',
    'idade' => 20
));

array_push($pessoas, array (
    'nome'=> 'Glaucio',
    'idade' => 25
));

print_r($pessoas);

echo '<br>';

echo json_encode($pessoas);

echo '<br>';
echo '<br>';

//trazendo o json para Array
//caso não tenha o "TRUE" ele vem como objeto e não como array

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';


$data = json_decode($json, true);
var_dump($data);


?>