<?php

session_start();
// As variáveis foram configuradas na sessão anterior (session1.php)
echo "A cor favorita é " . $_SESSION["corfav"] . ".<br>";
echo "O animal favorito é " . $_SESSION["animalfav"] . ".";

/*Após abrir as duas sessões no browser, o arquivo "session2.php" guardou as informações do arquivo "session1.php". Quando o browser ser fechado, ela perderá esses arquivos
?>