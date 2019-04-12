<?php
	/*
	* Template name: Quem somos
	*/
?>
<?php get_header('interna'); ?>
        
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
                <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
                <!--Titulo -->
                <div id="titulo">
                	
                    <h1><?php the_title(); ?></h1>
                    <a href="#" class="voltar">voltar</a>
                    
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
            
            <!--Texto com imagem -->
            <div id="texto_imagem">
            	
              <?php the_content(); ?>
              
                
            </div>
            <!-- / Texto com imagem -->
            
            <!--Imagem -->
            <div id="imagem_texto">
            	
                <?php the_post_thumbnail(); ?>
                
            </div>
            <!-- / Imagem -->
            
			<?php endwhile; endif; ?>
			
            <div class="clear"></div>
            
<?php get_footer(); ?>
