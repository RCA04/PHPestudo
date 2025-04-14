<?php

$conn = new PDO("sqlsrv:Database=dbphp7; server=DESKTOP-VV88VIF\SERVER1;ConnectionPooling=0", "sa", "123123");

$stmt= $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);




?>