<?php

	$archive = fopen('arquivo.txt', 'w+');
	fwrite($archive, 'Daniel Santos do Patrocinio');
	fread($archive, filesize('arquivo.txt'));
	


	fclose($archive);




?>