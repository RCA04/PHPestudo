<?php //permisão de pasta

$pasta = "arquivos";
$permisao = 775;

if(!is_dir($pasta)) mkdir($pasta, $permisao);

echo "Diretório criado"


?>