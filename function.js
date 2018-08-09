function fieldValidation(){
	var form = document.getElementById("idForm");
	var note1 = form.idNote1;
	var note2 = form.idNote2;
	var note3 = form.idNote3;

	if(note1.value == ""){
		alert('Preencha o campo "Nota 1"');

	}
	if(note2.value == ""){
		alert('Preencha o campo "Nota 2"');

	}
	if(note3.value == ""){
		alert('Preencha o campo "Nota 3"');

	}

	return true;
}