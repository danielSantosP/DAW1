<?php

	if (isset($_GET['submit'])) {
		$name = $_GET['name'];
		$numb = $_GET['numbers'];

		$cont = count($numb);
		$result=0;
		if($numb[0] == ''){
			echo "Não dá para fazer a média<br>";
		}else{
			foreach ($numb as $value) {
				$result = $result + $value;
			}
		}
		if($result>=0){
			$avr = $result / $cont;
			echo "Aluno: " . $name . "<br>Nota média: " . $avr;
		}


	}

?>