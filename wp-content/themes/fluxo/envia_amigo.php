<?php
	$seu_nome = $_POST["seu-nome"];
	$amigo = $_POST["email-amigo"];
	$msg = $_POST["msg"];
	$url = $_POST["url"];
	$nome_amigo = $_POST["nome-amigo"];
	
	
$headers = "";
$headers .= "Reply-To: salvador@fluxosolutions.com.br\r\n";
$headers .= "Return-Path: salvador@fluxosolutions.com.br\r\n";
$headers .= "From: Fluxo Soluções <fluxosolutions@fluxosolutions.com.br>" . "\r\n" . 
                 "Content-type: text/html; charset=utf-8" . "\r\n" . 
                 "X-Mailer: PHP/" . phpversion(); 

$para = $amigo;
$assunto = "Site Fluxo Soluções";
$messagem ="
	Olá $nome_amigo, <br>
	Seu Amigo: $seu_nome <br />
	acabou de enviar para você o link:<br />
	$url<br />
	Via: http://www.fluxosolucoes.com.br
";

if ( mail($para,$assunto,$messagem,$headers) ) {
	header("Location: $_POST[url]?envio=ok");
} else {
	header("Location: $_POST[url]?envio=false");
}

?>