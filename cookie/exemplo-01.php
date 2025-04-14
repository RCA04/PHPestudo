<?php 

$data = array(
    "empresa"=>"TORRE1"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 360);

echo "OK";

?>