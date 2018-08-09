<?php
	if (isset($_GET['submit'])){

		$numb = $_GET['numbers'];
		rsort($numb);
		if ($numb[0] == '') {
			echo "Não tem numeros inseridos";
		}else{
			echo "O maior numero é: " . $numb[0];
		}
	}
?>