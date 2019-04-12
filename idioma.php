<?php
	//script de idioma
	//ob_start('guia-fluxo');
	session_start('guia-fluxo'); 
	
	//$url = $_GET['url'];
	$url = "http://".$_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];

	$urlQuebrada = explode("/",$url);	
	$arrayReverso = array_reverse($urlQuebrada);
	   
    if($arrayReverso[0] == 'pt_br') { 
	    $_SESSION['idioma'] = 'pt_br';
    } else if($arrayReverso[0] == 'en_us') { 
	    $_SESSION['idioma'] = 'en_us';
    }
    
    $urlSemIdioma = str_replace($arrayReverso[0], "", $url);	
	$url_final = str_replace("http://www.fluxosolutions.com.br/idioma.php?url=","",$urlSemIdioma);
	//echo "<script>alert('". $url_final ."')</script>";	
    header('Location: '. $url_final);
?>