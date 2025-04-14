<?php
require_once("config.php");


//carrega 1 usuario
// $utilizador = new Usuario(); 
// $utilizador->loadById(5);
// echo $utilizador;

//Carrega uma LISTA de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma LISTA buscando pelo login
//$search = Usuario::search("us");
//echo json_encode($search);

//carrega um usuario validando a senha e o login
//$usuario = new Usuario();
//$usuario->login("usuario1","senha123");
//echo $usuario;

/* criar novo usuario
$aluno = new Usuario();
$aluno->setDeslogin("aluno5");
$aluno->setDessenha("aluno@5");
$aluno->insert();
echo $aluno;
*/
/*
$usuario = new Usuario();
$usuario->loadById(18);
$usuario->update("professor", "123123123");
echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->delete();
echo $usuario;

?>