<?php
	$empresa = $_POST["empresa"];
	$nome = $_POST["nome"];
	$endereco = $_POST["end"];
	$cargo = $_POST["cargo"];
	$email = $_POST["email"];
	$tel = $_POST["tel"];
	$fax = $_POST["fax"];
	$produto = $_POST["produto"];
	$outros = $_POST["outros"];
	$obs = $_POST["obs"];
	
$headers = "";
$headers .= "Reply-To: salvador@fluxosolutions.com.br\r\n";
$headers .= "Return-Path: salvador@fluxosolutions.com.br\r\n";
$headers .= "From: Fluxo - Newsletter - Site <fluxosolutions@fluxosolutions.com.br>" . "\r\n" . 
                 "Content-type: text/html; charset=utf-8" . "\r\n" . 
                 "X-Mailer: PHP/" . phpversion(); 

$para = "silvana.lima@fluxosolutions.com.br";
$assunto = "Formulário - Cotação";
$messagem ="
	Empresa: $empresa<br />
	Nome: $nome<br />
	Endereço: $endereco<br />
	Cargo: $cargo<br />
	E-mail: $email<br />
	Telefone: $tel<br />
	Fax: $fax<br />
	Produto: $produto<br />
	Outros: $outros<br />
	Obs.: $obs<br />
";

if ( mail($para,$assunto,$messagem,$headers) ) {
	header("Location: $_POST[url]?envio=ok");
} else {
	header("Location: $_POST[url]?envio=false");
}

?>