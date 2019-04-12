<?php
	/*
	* Template name: Cadastro Newsletter
	*/
?>
<?php get_header('interna'); ?>
        
<script>
$(document).ready(function(){
	$('#formacao, #grau').customStyle();
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
                	
                    <h1 class="contato">Cadastro Newsletter</h1>
                    <a href="#" class="voltar">voltar</a>
                    
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
            <form id="trabalheConosco" action="<?php bloginfo("template_url"); ?>/envia_cadastro.php" method="post">
            <!--Texto com imagem -->
            <div id="texto_imagem">
            	
				<?php if ( $_GET["envio"] == "ok" ): ?>
				<span class="envio_ok">Enviado com sucesso!</span>
				<?php elseif ( $_GET["envio"] == "false" ): ?>
				<span class="envio_false">Falha ao enviar!</span>
				<?php endif; ?>
				
                <h1 class="contato"> INFORMAÇÕES PESSOAIS </h1>
  
  	<input type="hidden" name="url" value="<?php bloginfo("url"); ?>/cadastro-newsletter" />
    <table class="tableleft" cellpadding="0" cellspacing="0" width="368" height="142">
		<tr  width="316">
        	<td><label for="nome">Nome:</label></td>
        </tr>
            <tr>
                <td width="300"><input id="nome" type="text" name="nome" class="validate[required]" /></td>
            </tr>
        <tr  width="316">
        	<td><label for="empresa">Empresa:</label></td>
        </tr>
            <tr>
                <td width="300"><input id="empresa" type="text" name="empresa" class="validate[required]" /></td>
            </tr>
          <tr  width="316">
        	<td><label for="departamento">Departamento:</label></td>
        </tr>
            <tr>
                <td width="300"><input id="departamento" type="text" name="departamento" class="validate[required]" /></td>
            </tr>
        <tr  width="316">
        	<td><label for="cargo">Cargo:</label></td>
        </tr>
            <tr>
                <td width="300"><input id="cargo" type="text" name="cargo" class="validate[required]" /></td>
            </tr>
      	<tr  width="316">
        	<td><label for="e-mail">E-mail:</label></td>
        </tr>
            <tr>
                <td><input id="e-mail" type="text" name="email" class="validate[required]" /></td>
            </tr>
           <tr  width="316">
        	<td><label for="endereco">Endereço:</label></td>
        </tr>
            <tr>
                <td width="300"><input id="endereco" type="text" name="endereco" class="validate[required]" /></td>
            </tr>
     	<tr  width="316">
        	<td><label for="cidade">Cidade:</label></td>
        </tr>
        <tr>
            <td><input id="cidade" type="text" name="cidade" class="endereco validate[required]" /></td>
        </tr>
    	<tr  width="316">
        	<td><label for="estado">Estado:</label></td>
        </tr>
        <tr>
            <td width="300"><input id="estado" type="text" name="estado" class="validate[required]" /></td>
        </tr> 
        <tr  width="316">
        	<td><label for="cep">CEP:</label></td>
        </tr>
        <tr>
            <td width="300"><input id="cep" type="text" name="cep" class="validate[required]" /></td>
        </tr>
        <tr  width="316">
        	<td><label for="pais">País:</label></td>
        </tr>
            <tr>
                <td width="300"><input id="pais" type="text" name="pais" class="validate[required]" /></td>
            </tr>
	</table>
    		
            <input style="margin-top:20px;" type="submit" class="enviarbt" value="ENVIAR" />
      		<input style="margin-top:20px;" type="reset" class="limparbt" value="LIMPAR" />
  
                
                
            </div>
            <!-- / Texto com imagem -->
            
            <!--Imagem -->
            <div id="imagem_texto">
            	
               
      
                
            </div>
            <!-- / Imagem -->
            </form>
            <div class="clear"></div>
            
<?php get_footer(); ?>
