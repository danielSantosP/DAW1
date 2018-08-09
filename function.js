function createInputAges(){
	var div = document.getElementById('idAddAges');
	var input = document.createElement("input");
	input.type = "text";
	input.name = "ages[]";
	div.appendChild(input);
	div.appendChild(document.createElement("br"));
};

function createInputNames(){
	var div = document.getElementById('idAddNames');
	var input = document.createElement("input");
	input.type = "text";
	input.name = "names[]";
	div.appendChild(input);
	div.appendChild(document.createElement("br"));
};
