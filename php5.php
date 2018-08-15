<?php

$cookie_name = "userXPTO";
$cookie_value = "Daniel e Ricardo";
setcookie($cookie_name, $cookie_value, time() + (120), "/");

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' não está configurado!";
} else {
    echo "Cookie '" . $cookie_name . "' foi configurado!<br>";
    echo "O Valor é: " . $_COOKIE[$cookie_name];
}

/*
//if(DateTime() > ?????)
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' não está configurado!";
} else {
    echo "Cookie '" . $cookie_name . "' foi configurado!<br>";
    echo "O Valor é: " . $_COOKIE[$cookie_name];
}

*/

?>