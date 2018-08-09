function fieldValidation(){
	var form = document.getElementById("idForm");
	var name = form.idName;
	var password = form.idPassword;

	if(name.value == ""){
		alert('Preencha o campo "Nome"');

	}

	if(password.value == ""){
		alert('Preencha o campo "Senha"');

	}

	return true;
}