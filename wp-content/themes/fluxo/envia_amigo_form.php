<?php
	/*
	* Template name: Enviar Amigo
	*/
?>
<?php get_header(); ?>
        
<script type="text/javascript">
	$(function(){

		$('#my-dropdown, #my-dropdown2, #my-dropdown3, #my-dropdown4, #my-dropdown5, #my-dropdown6').sSelect();

		//set max height
		$('#my-dropdownCountries').sSelect({ddMaxHeight: '300px'});

		//set value on click
		$('#setVal').click(function(){
			$('#my-dropdown5').getSetSSValue('4');
		});

		//get value on click
		$('#getVal').click(function(){
			alert('The value is: '+$('#my-dropdown5').getSetSSValue());
		});

		//alert change event
		$('#my-dropdownChange').sSelect().change(function(){alert('changed')});

		//add options to select and update
		$('#addOptions').click(function(){
			$('#my-dropdown6').append('<option value="newOpt">New Option</option>').resetSS();
			return false;
		});
		
		$("#trabalheConosco").validationEngine();
		
	});
</script>
		
        <!--Conteudo com texto -->
        <div id="conteudo_texto">
            
            <!--Barra do topo -->
            <div id="barra_topo">
            	
                <!--Breadcrumb e botoes de configuração -->
                <div class="configs">
                	
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<div id="breadcrumb">','</div>');
						}
					?>
                    
                    <?php include("incs/botoes.php"); ?>
                    
                    <div class="clear"></div>
                    
                </div>
                <!-- / Breadcrumb e botoes de configuração -->
                
                <!--Titulo -->
                <div id="titulo">
                	
                    <h1 class="contato">Enviar para amigo</h1>
                    <a href="#" class="voltar">voltar</a>
                    
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
            <form id="enviaAmigo" action="<?php bloginfo("template_url"); ?>envia_amigo.php" method="post">
            <!--Texto com imagem -->
            <div id="texto_imagem">
            	
				<?php if ( $_GET["envio"] == "ok" ): ?>
				<span class="envio_ok">Enviado com sucesso!</span>
				<?php elseif ( $_GET["envio"] == "false" ): ?>
				<span class="envio_false">Falha ao enviar!</span>
				<?php endif; ?>
				
                <h1 class="contato"> INFORMAÇÕES PESSOAIS </h1>
  
  	<input type="hidden" name="url" value="<?php bloginfo("url"); ?>/trabalhe-conosco" />
    <table class="tableleft" cellpadding="0" cellspacing="0" width="368" height="142">
		<tr  width="316">
        	<td><label for="nome">Nome:</label></td>
        </tr>
            <tr>
                <td width="300"><input id="nome" type="text" name="nome" class="validate[required]" /></td>
            </tr>
      	<tr  width="316">
        	<td><label for="e-mail">E-mail:</label></td>
        </tr>
            <tr>
                <td><input id="e-mail" type="text" name="email" class="validate[required]" /></td>
            </tr>
		
        <tr  width="316">
        	<td><label for="nomeamigo">Nome do amigo(a):</label></td>
        </tr>
            <tr>
                <td width="300"><input id="nomeamigo" type="text" name="nomeamigo" class="validate[required]" /></td>
            </tr>
      	<tr  width="316">
        	<td><label for="emailamigo">E-mail do amigo(a):</label></td>
        </tr>
            <tr>
                <td><input id="emailamigo" type="text" name="emailamigo" class="validate[required]" /></td>
            </tr>
            
            </table>
            
            	<input type="submit" class="amigoenviar" value="ENVIAR" />
            </div>
                       <!-- / Imagem -->
            </form>
            
<?php get_footer(); ?>
