<?php

session_start();
// Configura as variáveis da sessão
$_SESSION["corfav"] = "verde";
$_SESSION["animalfav"] = "cachorro";
echo "As varíáveis foram configuradas.";

?>