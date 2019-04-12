<?php
	/*
	* Template name: Canal de Qualidade
	*/
?>
<?php get_header('interna'); ?>

<script>
$(document).ready(function(){
	$('#produto').customStyle();
	$("#formCotacao").validationEngine();
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
                	
                    <h1 class="contato">Canal de Comunicação</h1>
                    <a href="#" class="voltar">voltar</a>
                    <br clear="all">
					<p>Faça aqui suas reclamações, sugestões ou denúncias.</p>
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
			
            <form id="formCotacao" method="post" action="<?php bloginfo("template_url"); ?>/envia_canal_qualidade.php">
			<input type="hidden" name="url" value="<?php bloginfo("url"); ?>/canal-da-qualidade" />
            <!--Texto com imagem -->
            <div id="texto_imagem">
            	
				<?php if ( $_GET["envio"] == "ok" ): ?>
				<span class="envio_ok">Enviado com sucesso!</span>
				<?php elseif ( $_GET["envio"] == "false" ): ?>
				<span class="envio_false">Falha ao enviar!</span>
				<?php endif; ?>
				
              
  
    <table class="tableleft" cellpadding="0" cellspacing="0" width="368" height="142">
		<tr  width="316">
        	<td><label for="nome">Nome:</label></td>
        </tr>
            <tr>
				<!-- class="validate[required]" -->
                <td><input id="nome" type="text" name="nome" /></td>
            </tr>
        <tr  width="316">
        	<td><label for="empresa">Empresa / Unidade:</label></td>
        </tr>
            <tr>
                <td width="300"><input id="empresa" type="text" name="empresa" /></td>
            </tr>	
     	<tr  width="316">
        	<td><label for="local">Local:</label></td>
        </tr>
            <tr>
                <td><input id="local" type="text" name="local" /></td>
            </tr>
      	

		<tr  width="316">
        	<td><label for="tel">Telefone:</label></td>
        </tr>
            <tr>
                <td><input id="tel" type="text" name="tel" /></td>
            </tr>
        
        <tr  width="316">
        	<td><label for="e-mail">E-mail:</label></td>
        </tr>
            <tr>
                <td><input id="e-mail" type="text" name="email" /> </td>
            </tr>

         <tr  width="316">
        	<td><label for="assunto">Assunto:</label></td>
        </tr>
            <tr>
                <td><input id="assunto" type="text" name="assunto" /> </td>
            </tr>
        <tr  width="316">
	        <td ><label for="mensagem">Mensagem:</label></td>
	    </tr>
	      <tr>
	      	<td><textarea width="318" height="97" id="mensagem"  name="mensagem" class="mensagem1"> </textarea></td>
	      </tr> 

	      <tr> 
			<td> 
				<!--<p> Os itens com asterisco (*) são de preenchimento obrigatório. </p>-->
				<br />
			    <input type="submit" class="enviarbt2" value="ENVIAR" />
			    <input type="reset" class="limparbt2" value="LIMPAR" />
			</td>
	      </tr>
            
             
	</table>
                
            </div>
            <!-- / Texto com imagem -->
            
          
            </form>
            <div class="clear"></div>
            
<?php get_footer(); ?>
