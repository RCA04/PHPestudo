<?php
require_once ("config.php");

//echo session_id(); para mostrar o id da sessão


sesssion_regenerate_id(); // tem a função de criar uma nova ID de Sessão

echo session_id();


?>