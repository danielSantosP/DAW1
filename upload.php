<?php
$target_dir = "uploads/";//Diretório Alvo
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);//Especifica o caminho, basename pegando o nome do arquivo e sua extensão
$uploadOk = 1; //Inicialização
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//Pega a extensão, strtolower para pegar em letras minusculas e pathinfo com as informações do caminho
if(isset($_POST["submit"])) {//Verificando se realmente foi enviado algo
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);//Pega o tamanho da imagem como verificação
    if($check !== false) {//Se não falso...
        echo "File is an image - " . $check["mime"] . ".";///...confirma exibindo a mensagem com a extensão da mesma
        $uploadOk = 1;//Altera valor
    } else {//Caso contrário...
        echo "File is not an image.";//...simplesmente avisa que não se trata de uma imagem
        $uploadOk = 0;//Altera valor
    }
}
?>