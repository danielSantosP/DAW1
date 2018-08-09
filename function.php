<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$password = $_POST['passw'];

		if ($name == "etec" && $password == "informatica") {
			echo "Logado com sucesso!";
		}else
			echo "Login não aceito! Tente novamente!";
	}

?>