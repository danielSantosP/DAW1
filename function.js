function createInputs(){
	var div = document.getElementById('createInputs');
	var label = document.createElement("label");
	label.innerHTML = "Nome: ";
	var input = document.createElement("input");
	input.type = "text";
	input.name = "firstName[]";
	div.appendChild(label);
	div.appendChild(input);
	div.appendChild(document.createElement("br"));

	var label = document.createElement("label");
	label.innerHTML = "Sobrenome: ";
	var input = document.createElement("input");
	input.type = "text";
	input.name = "lastName[]";
	div.appendChild(label);
	div.appendChild(input);
	div.appendChild(document.createElement("br"));

	var label = document.createElement("label");
	label.innerHTML = "Idade: ";
	var input = document.createElement("input");
	input.type = "number";
	input.name = "age[]";
	div.appendChild(label);
	div.appendChild(input);
	div.appendChild(document.createElement("br"));

	var label = document.createElement("label");
	label.innerHTML = "Sexo: ";
	var input = document.createElement("input");
	input.type = "text";
	input.name = "sex[]";
	div.appendChild(label);
	div.appendChild(input);
	div.appendChild(document.createElement("br"));

	var label = document.createElement("label");
	label.innerHTML = "Data de nascimento: ";
	var input = document.createElement("input");
	input.type = "date";
	input.name = "date[]";
	div.appendChild(label);
	div.appendChild(input);
	div.appendChild(document.createElement("br"));
};