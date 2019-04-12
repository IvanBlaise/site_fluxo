		<script type="text/javascript">
        	$(document).ready(function() {

		
			$(".amigo").fancybox({
				'transitionIn'	:	'elastic',
				'transitionOut'	:	'elastic',
				'speedIn'		:	600, 
				'speedOut'		:	200, 

			});
			
			
		});
		
		
        </script>
                    <div id="botoes">
                        
                        <?php
 
$protocolo    = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === false) ? 'http' : 'https';
 
$host         = $_SERVER['HTTP_HOST'];
 
$script       = $_SERVER['SCRIPT_NAME'];
 
$parametros   = $_SERVER['QUERY_STRING'];
 
$UrlAtual     = $protocolo . '://' . $host  .  $_SERVER['REQUEST_URI'];
 


?>
                        
                        <a href="#" class="aumenta_fonte">A+</a>
                        <a href="#" class="diminui_fonte">A-</a>
                        <a href="<?php bloginfo('template_url')?>/enviar_amigo.php?url=<?php echo $UrlAtual; ?>" class="enviar amigo">Enviar</a>
                        <a href="#" onClick="print();return false;" class="imprimir">Imprimir</a>
                        
                    </div>
					
					<script>
						$(function(){
							
							fontSize = 12;
							
							$(".aumenta_fonte").click(function(){
								fontSize = fontSize + 1;
								$("#conteudo_texto p, #texto_imagem *, #grupo_fluxo *").css("fontSize", fontSize + "px");
							});
							
							$(".diminui_fonte").click(function(){
								fontSize = fontSize - 1;
								$("#conteudo_texto p, #texto_imagem *, #grupo_fluxo *").css("fontSize", fontSize + "px");
							});
							
						});
					</script>