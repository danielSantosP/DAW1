<?php

	if (isset($_POST['submit'])) {
		
		$person = array(
			$firstName = $_POST['firstName'],
			$lastName = $_POST['lastName'],
			$age = $_POST['age'],
			$sex = $_POST['sex'],
			$date = $_POST['date'],
		);



		array_multisort($person[4],SORT_ASC, $person[0],SORT_ASC, $person[1],SORT_ASC, $person[2],SORT_ASC, $person[3],SORT_ASC);

		for ($row=0; $row < 5; $row++) { 
			echo "<ul>";
			for ($col=0; $col < 5; $col++) { 
				echo "<li>" . $person[$col][$row] . "</li>";
			}
			echo "</ul>";
		}

	}

?>