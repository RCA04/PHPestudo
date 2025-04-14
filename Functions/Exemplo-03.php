<?php
//parâmetros função / argumento

function ola($texto = "mundo", $periodo="bom dia"){

    return "olá $texto! $periodo! <br>";
}

echo ola();
echo ola("", "boa noite");
echo ola ("Glaucio", "boa tarde");
echo ola ("Pedro", " ");



//aqui é obrigatorio informar o parâmetro do $Texto pois ele não possuí um, 
//é de boa pratica colocar o Parâmetro que será obrigado sempre a esquerda (primeiras posições)
/*function ola($texto, $perodo="bom dia"){

    return "olá $texto! $periodo! <br>";
}

echo ola();
echo ola("");
echo ola ("Glaucio");
echo ola ("Pedro");
*/

?>