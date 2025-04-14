<?php //Injeção SQL

$id = (isset($_GET["id"]))?$_GET["id"]:8;

if(!is_numeric($id) || strlen($id) > 5){
    exit("não");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE  idusuarios = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)){
    echo $resultado->deslogin . "<br>";

}


?>