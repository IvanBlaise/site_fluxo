<?php
	/*
	* Template name: Trabalhe Conosco
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
                	
                    <h1 class="contato"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Trabalhe Conosco" : "Work With Us" );  ?> </h1>
                    <a href="#" class="voltar"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "voltar" : "back" );  ?></a>
                    
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
            <form id="trabalheConosco" action="<?php bloginfo("template_url"); ?>/envia_trabalhe_conosco.php" method="post">
            <!--Texto com imagem -->
            <div id="texto_imagem">
            	
				<?php if ( $_GET["envio"] == "ok" ): ?>
				<span class="envio_ok">Enviado com sucesso!</span>
				<?php elseif ( $_GET["envio"] == "false" ): ?>
				<span class="envio_false">Falha ao enviar!</span>
				<?php endif; ?>
				
                <h1 class="contato"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "INFORMAÇÕES PESSOAIS" : "PERSONAL INFORMATION" );  ?> </h1>
  
  	<input type="hidden" name="url" value="<?php bloginfo("url"); ?>/trabalhe-conosco" />
    <table class="tableleft" cellpadding="0" cellspacing="0" width="368" height="142">
		<tr  width="316">
        	<td><label for="nome"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Nome" : "Name" );  ?>:</label></td>
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
        	<td><label for="tel"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Telefone" : "Phone" );  ?>:</label></td>
        </tr>
            <tr>
                <td><input id="tel" type="text" name="tel" class="telefone validate[required]" /></td>
            </tr>
      	<tr  width="316">
        	<td><label for="local"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Local de residência" : "Place of residence" );  ?>:</label></td>
        </tr>
            <tr>
                <td><input id="local" type="text"  name="local" class="validate[required]" /> </td>
            </tr>     
	</table>
                
                
            </div>
            <!-- / Texto com imagem -->
            
            <!--Imagem -->
            <div id="imagem_texto">
            	
               <h1 class="contato"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "INFORMAÇÕES PROFISSIONAIS" : "PROFESSIONAL INFORMATION" );  ?> </h1>
    
    <table class="tableright" cellpadding="0" cellspacing="0" width="411" height="255">
      <tr  width="316">
        <td width="82"><label for="inst"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Instituição de Ensino" : "Education Institution" );  ?>:</label></td></tr><tr><td width="327"><input id="inst" type="text" name="inst" class="validate[required]"/> </td>
        </tr>
      <tr  width="316">
        <td><label><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Área de Formação" : "Training Area" );  ?>:</label></td></tr>
            <tr>
                <td>
                <select id="formacao" name="formacao" class="validate[required]">
					<option value="administracao"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Administração" : "Administration" );  ?></option>
					<option value="contabilidade"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Contabilidade" : "Accounting" );  ?></option>
					<option value="engenharia" selected="selected"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Engenharia" : "Engineering" );  ?></option>
					<option value="informatica"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Informática" : "Computers" );  ?></option>
					<option value="outros"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Outros" : "Others" );  ?></option>
				</select>
                </td>
            </tr>
      <tr  width="316">
        <td><label><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Grau de Instrução" : "Literacy" );  ?>:</label></td></tr> 
        <tr><td>
          <select id="grau" name="grau" class="validate[required]">
          		<option value="graduacao-completa"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Graduação Completa" : "Complete graduation" );  ?></option>
                <option value="especializacao"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Especialização" : "Specialization" );  ?></option>
                <option value="mestrado"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Mestrado" : "Master's degree" );  ?></option>                 
                <option value="doutorado"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Doutorado" : "Doctorate" );  ?></option>
                <option value="curso-tecnico"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Curso Técnico" : "Technical Course" );  ?></option>                
                <option value="graduacao-tecnica"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Graduação Técnica" : "Graduate Technical" );  ?></option>
                <option value="ensino-medio-completo"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Ensino Médio Completo" : "School Full" );  ?></option>   
          </select>
        </td>
        </tr>
      <tr  width="316">
        <td><label for="idiomas"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Idiomas" : "Languages" );  ?>:</label></td></tr>
       <tr><td>
          <input id="idiomas" name="idiomas" class="validate[required]"  />
           
          </td>
      </tr>
      <tr  width="316">
        <td ><label for="breve"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Breve apresentação" : "Brief presentation" );  ?>:</label></td>
      </tr>
      <tr>
      	<td><textarea width="318" height="97" id="breve" name="breve" class="validate[required] mensagem"></textarea></td>
      </tr>
      <tr  width="316">
        <td width="82"><label for="anexa_curriculo"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Anexar Currículo" : "Attach Curriculum" );  ?>:</label></td></tr><tr><td width="327">
        	<input id="realupload" name="realupload" class="realupload" type="file" onchange="this.form.arquivo.value = this.value;" />
            <input id="arquivo" name="arquivo" class="arquivo" type="text" />
		</td>
        </tr>
       
      </table>
      <p style="margin:10px 0;"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Todos os campos são de preenchimento obrigatório" : "All fields are mandatory" );  ?>:</p>
      <input type="submit" class="enviarbt" value="ENVIAR" />
      <input type="reset" class="limparbt" value="LIMPAR" />
  
                
            </div>
            <!-- / Imagem -->
            </form>
            <div class="clear"></div>
            
<?php get_footer(); ?>
