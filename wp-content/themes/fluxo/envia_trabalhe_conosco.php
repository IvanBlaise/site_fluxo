<?php
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$telefone = $_POST["tel"];
	$local = $_POST["local"];
	$inst = $_POST["inst"];
	$formacao = $_POST["formacao"];
	$idiomas = $_POST["idiomas"];
	$breve = $_POST["breve"];
	
$headers = "";
$headers .= "Reply-To: salvador@fluxosolutions.com.br\r\n";
$headers .= "Return-Path: salvador@fluxosolutions.com.br\r\n";
$headers .= "From: Fluxo - Newsletter - Site <fluxosolutions@fluxosolutions.com.br>" . "\r\n" . 
                 "Content-type: text/html; charset=utf-8" . "\r\n" . 
                 "X-Mailer: PHP/" . phpversion(); 

$para = "silvana.lima@fluxosolutions.com.br";
$assunto = "Formulário - Trabalhe Conosco";
$messagem ="
	Nome: $nome<br />
	E-mail: $email<br />
	Telefone: $telefone<br />
	Local: $local<br />
	Intituição: $inst<br />
	Formação: $formacao<br />
	Idiomas: $idiomas<br />
	Drecrição: $breve<br />
";

if ( mail($para,$assunto,$messagem,$headers) ) {
	header("Location: $_POST[url]?envio=ok");
} else {
	header("Location: $_POST[url]?envio=false");
}

?>