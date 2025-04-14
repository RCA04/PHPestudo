<?php
session_start();


//session_unset($_SESSION["nome"]);//para remover a SEÇÃO


echo $_SESSION['nome'];


session_destroy();

/*
Session_unset apenas apaga a informação da seção

session_destroy deleta  a seção


*/
?>