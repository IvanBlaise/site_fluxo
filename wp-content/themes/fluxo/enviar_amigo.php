<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- JS -->
<script type="text/javascript" src="/wp-content/themes/fluxo/js/jquery.js"></script> <!-- Biblioteca de JS -->


<!-- Validação -->
<link href="/wp-content/themes/fluxo/style.css" type="text/css" rel="stylesheet" />
<link href="/wp-content/themes/fluxo/validate.css.css" type="text/css"/>
<script type="text/javascript" src="/wp-content/themes/fluxo/js/jquery.validationEngine.js"> </script>
<script type="text/javascript" src="/wp-content/themes/fluxo/js/jquery.validationEngine-pt.js"> </script>

<!-- /JS -->

</head>

<body style="float:left; display:block;">
<script>
$(document).ready(function(){
	$("#amigo").validationEngine();
});
</script>
<style type="text/css">
	#amigo {
		float:left;
		width:325px;
		height:300px;	
	}
form {
	clear:both;	
}

form input {
	color: #666;
	background-color: #f1f2f2;
	border: solid 1px #000;
	width: 313px;
	height: 22px;
	padding: 0 0 0 3px;
	float:left;
	clear:both;
}

form .telefone {
	width: 160px;
	height: 22px;
}

form label {
	float: left;
	color: #878787;
	font-family: 'Tahoma';
	font-size: 12px;
	margin-bottom: 3px;
	margin-top: 15px;
	clear:both;
	margin:5px 0;
}
form textarea {
	font-family: 'Tahoma';
	color: #666;
	font-size: 14px;
	background-color: #f1f2f2;
	width: 313px;
	padding: 0 0 0 3px;
	height: 80px;
	border: solid 1px #000;
	float:left;
	clear:both;
}
form .enviar {
	font-family: 'Tahoma';
	font-size: 14px;
	font-weight: bold;
	color: #fff;
	background-color: #139c4d;
	width: 72px;
	height: 25px;
	float:left;
	margin:5px 0;
}


</style>

<form id="amigo" method="post" action="/wp-content/themes/fluxo/envia_amigo.php">
	<input type="hidden" value="<?php echo $_REQUEST["url"]; ?>" id="url" name="url" />
	<label for="seu-nome">Seu Nome</label>
    <input type="text" id="seu-nome" name="seu-nome" />
	<label for="nome-amigo">Nome do Amigo</label>
    <input type="text" name="nome-amigo" id="nome-amigo">
    <label for="email-amigo">Email do Amigo</label>
    <input type="text" name="email-amigo" id="email-amigo">
   
    <label for="mesg">Mensagem</label>
    <textarea id="msg" name="msg"></textarea>
     <input type="submit" class="enviar" id="enviar" value="Enviar" />
</form>
<?php if ( $_GET["envio"] == "ok" ): ?>
<span class="envio_ok">Enviado com sucesso!</span>
<?php elseif ( $_GET["envio"] == "false" ): ?>
<span class="envio_false">Falha ao enviar!</span>
<?php endif; ?>
</body>
</html>
