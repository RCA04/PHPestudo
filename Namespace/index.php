<?php
require_once("config.php");


use Cliente\Cadastro;


$cad = new Cadastro();

$cad->setNome("Djalma sindeaux");
$cad->setEmail("Djalma@gmail.com");
$cad->setSenha("123123");
$cad->registraVenda();

?>