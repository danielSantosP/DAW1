<?php






$x = $_GET["campo1"];

echo date('d/m/Y H:i:s', mktime(date('H'), date('i'), date('s'), date('n'), date('j') + $x, date('Y')));

?>
