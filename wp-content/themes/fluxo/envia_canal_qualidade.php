<?php
	
	$nome = $_POST["nome"];
	$empresa = $_POST["empresa"];
	$local = $_POST["local"];
	$tel = $_POST["tel"];
	$email = $_POST["email"];
	$assunto = $_POST["assunto"];
	$mensagem = $_POST["mensagem"];
	
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
//require_once("/phpmailer/class.phpmailer.php");
require 'phpmailer/PHPMailerAutoload.php';

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
//$mail->SMTPDebug = 3;
$mail->CharSet = "UTF-8";
$mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'ti@fluxosolutions.com.br'; // Usuário do servidor SMTP
$mail->Password = 'fey54tx22016'; // Senha do servidor SMTP
//$mail->SMTPSecure = 'tls';  
$mail->Port = 587;
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "fluxo.canal@fluxosolutions.com.br"; // Seu e-mail
$mail->FromName = "Fluxo Solutions"; // Seu nome
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAddress('gabriel@sigu.com.br');
$mail->AddAddress('silvana.lima@fluxosolutions.com.br');
//$mail->AddAddress('ciclano@site.net');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Canal de Comunicação - Fluxo Solutions"; // Assunto da mensagem
$messagem ="
	Nome: $nome<br />
	Empresa: $empresa <br />
	Local: $local <br />
	Telefone: $tel <br />
	E-mail: $email<br />
	Assunto: $assunto <br />
	Mensagem: $mensagem <br />
";
$mail->Body = $messagem;
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
// Envia o e-mail
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
// Exibe uma mensagem de resultado
if ($enviado) {
  //echo "E-mail enviado com sucesso!";
  header("Location: $_POST[url]?envio=ok");
} else {
  //echo "Não foi possível enviar o e-mail.";
  //echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
  header("Location: $_POST[url]?envio=false");
}
?>