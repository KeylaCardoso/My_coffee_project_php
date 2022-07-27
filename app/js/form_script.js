
function valida(){
	var nome = document.getElementById('nome');
	var envio = document.getElementById('envio');
	if ((nome.value === "") || (envio.value === "")){
		alert("Por favor, verifique se você preencheu seu nome e inseriu sua solicitação");
	}

	else{
		alert("Seu formulário foi enviado com sucesso!");
	}
}