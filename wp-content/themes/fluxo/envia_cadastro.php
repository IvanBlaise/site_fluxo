<?php
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$empresa = $_POST["empresa"];
	$cargo = $_POST["cargo"];
	$departamento = $_POST["departamento"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$cep = $_POST["cep"];
	$pais = $_POST["pais"];
	$endereco = $_POST["endereco"];
	
$headers = "";
$headers .= "Reply-To: salvador@fluxosolutions.com.br\r\n";
$headers .= "Return-Path: salvador@fluxosolutions.com.br\r\n";
$headers .= "From: Fluxo - Newsletter - Site <fluxosolutions@fluxosolutions.com.br>" . "\r\n" . 
                 "Content-type: text/html; charset=utf-8" . "\r\n" . 
                 "X-Mailer: PHP/" . phpversion(); 

$para = "silvana.lima@fluxosolutions.com.br";
$assunto = "Formulário - NewsLetter";
$messagem ="
	Nome: $nome<br />
	E-mail: $email<br />
	Empresa: $empresa<br />
	Departamento: $departamento<br />
	Cargo: $cargo<br />
	Cidade: $cidade <br/>
	Estado: $estado <br/>
	Endereço: $endereco <br />
	CEP: $cep<br/>
	País: $pais
";

if ( mail($para,$assunto,$messagem,$headers) ) {
	header("Location: $_POST[url]?envio=ok");
} else {
	header("Location: $_POST[url]?envio=false");
}

?>