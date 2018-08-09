<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$mail = $_POST['mail'];
		$date = $_POST['date'];
		$optionSelect = $_POST['select'];

		echo "Nome: " . $name . "<br>E-mail: " . $mail . "<br>Data de nascimento: " . $date . "<br>Bandeira do cartão: " . $optionSelect;
	}
	
 ?>