<?php

	if(isset($_POST['submit'])){
		echo "<h2>Resposta dos exercicios</h2>";
		averageCalc();
		largestNumber();
		conferAges();
		invertedShow();
		dateShow();
	};

	function averageCalc(){

		echo "<h3>Exercicio 1</h3>";
		$value1 = $_POST['n1'];
		$value2 = $_POST['n2'];
		$value3 = $_POST['n3'];
		$value4 = $_POST['n4'];
		$value5 = $_POST['n5'];
		$value6 = $_POST['n6'];
		$value7 = $_POST['n7'];
		$value8 = $_POST['n8'];
		$value9 = $_POST['n9'];
		$value10 = $_POST['n10'];
		$average= (($value1+$value2+$value3+$value4+$value5+$value6+$value7+$value8+$value9+$value10)/10);

		echo "O resultado é: " . $average . "<br><br>";
	}

	function largestNumber(){
		echo "<h3>Exercicio 2</h3>";
		$largNumber = $_POST['numbers'];

		rsort($largNumber);

		echo "O maior número é: " . $largNumber[0] . "<br><br>"; 
	}

	function conferAges(){
		echo "<h3>Exercicio 3</h3>";
		$confAges = $_POST['ages'];
		$oldAge = 0;
		$youngAge = 0;
		foreach ($confAges as $value) {
			if($value<18){
				$youngAge++;
			}else{
				$oldAge++;
			}
		}

		echo "Número de pessoas maiores de idade: " . $oldAge . "<br>Número de pessoas menores de idade: ". $youngAge;
	}


	function invertedShow(){
		echo "<h3>Exercicio 4</h3>";
		$ordainedNames = $_POST['names'];

		echo "Ordem inserida<br>";
		foreach ($ordainedNames as $value) {
			echo $value . "<br>";
		}
		$invertNames = array_reverse($ordainedNames);
		echo "<br>Após inverter<br>";
		foreach ($invertNames as $value) {
			echo $value . "<br>";
		}
	}


	function dateShow(){
		echo "<h3>Exercicio 5</h3>";
		$date = $_POST['date'];
		$newFormatDate = explode("/", $date);
		echo "Dia: " . $newFormatDate[0] . "<br>Mês: " . $newFormatDate[1] . "<br>Ano: " . $newFormatDate[2];
	}
?>