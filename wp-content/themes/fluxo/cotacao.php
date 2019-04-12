<?php
	/*
	* Template name: Cotação
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
                	
                    <h1 class="contato">Cotação</h1>
                    <a href="#" class="voltar">voltar</a>
                    
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
			
            <form id="formCotacao" method="post" action="<?php bloginfo("template_url"); ?>/envia_cotacao.php">
			<input type="hidden" name="url" value="<?php bloginfo("url"); ?>/cotacao" />
            <!--Texto com imagem -->
            <div id="texto_imagem">
            	
				<?php if ( $_GET["envio"] == "ok" ): ?>
				<span class="envio_ok">Enviado com sucesso!</span>
				<?php elseif ( $_GET["envio"] == "false" ): ?>
				<span class="envio_false">Falha ao enviar!</span>
				<?php endif; ?>
				
                <h1 class="contato"> REMETENTE </h1>
  
    <table class="tableleft" cellpadding="0" cellspacing="0" width="368" height="142">
		<tr  width="316">
        	<td><label for="empresa">Empresa*:</label></td>
        </tr>
            <tr>
                <td width="300"><input id="empresa" type="text" name="empresa" class="validate[required]" /></td>
            </tr>
      	<tr  width="316">
        	<td><label for="nome">Nome*:</label></td>
        </tr>
            <tr>
                <td><input id="nome" type="text" name="nome" class="validate[required]" /></td>
            </tr>
     	<tr  width="316">
        	<td><label for="end">Endereço*:</label></td>
        </tr>
            <tr>
                <td><input id="end" type="text" name="end" class="validate[required]" /></td>
            </tr>
      	<tr  width="316">
        	<td><label for="cargo">Cargo/Deptº*:</label></td>
        </tr>
            <tr>
                <td><input id="cargo" type="text" name="cargo" class="validate[required]" /> </td>
            </tr>
            <tr  width="316">
        	<td><label for="e-mail">E-mail*:</label></td>
        </tr>
            <tr>
                <td><input id="e-mail" type="text" name="email" class="validate[required]" /> </td>
            </tr>
		<tr  width="316">
        	<td><label for="tel">Telefone*:</label></td>
        </tr>
            <tr>
                <td><input id="tel" type="text" name="tel" class="telefone validate[required]" /></td>
            </tr>
         <tr  width="316">
        	<td><label for="fax">Fax:</label></td>
        </tr>
            <tr>
                <td><input id="fax" type="text" name="fax" class="telefone" /></td>
            </tr>
            
             
	</table>
                
            </div>
            <!-- / Texto com imagem -->
            
            <!--Imagem -->
            <div id="imagem_texto">
            	
               <h1 class="contato">Serviços </h1>
    <table class="tableright" cellpadding="0" cellspacing="0" width="411" height="255">	
      <tr  width="316">
        <td><label>Escolha um produto/serviço*:</label></td></tr>
            <tr>
                <td>
                <select id="produto" name="produto" class="validate[required]" >
                <?php $query_rep = new WP_Query( array( 'post_type' => 'solucoes_integradas', 'posts_per_page' => -1 ) ); ?>
				<?php if( $query_rep->have_posts() ): while( $query_rep->have_posts() ): $query_rep->the_post(); ?>
                
                	<option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                
                <?php endwhile; endif; ?>
         
            </select>
                </td>
                </tr>
                <tr  width="316">
        	<td><label for="outros">Outros:</label></td>
        </tr>
            <tr>
                <td><input id="outros" type="text" name="outros"/></td>
            </tr>
      
      <tr  width="316">
        <td ><label for="obs">Observações:</label></td>
      </tr>
      <tr>
      	<td><textarea width="318" height="97" id="obs"  name="obs" class="mensagem1"> </textarea></td>
      </tr>  
      </table>
      <p> Os itens com asterisco (*) são de preenchimento obrigatório. </p>
      <input type="submit" class="enviarbt2" value="ENVIAR" />
      <input type="reset" class="limparbt2" value="LIMPAR" />

                
            </div>
            <!-- / Imagem -->
            </form>
            <div class="clear"></div>
            
<?php get_footer(); ?>
