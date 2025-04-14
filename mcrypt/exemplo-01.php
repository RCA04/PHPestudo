<?php 

$data = [
    "nome"=>"Ryan"
];

define('SECRET', pack('a16', 'senha'));

$mcrypt = mcrypt_encrypt(
    MCRUPT_RIJNDAEL_128,
    SECRET,
    json_encode($data),
    MCRYPT_MODE_ECB
);

?>