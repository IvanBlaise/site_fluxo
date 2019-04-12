<?php
	/*
	* Template name: Soluções Integradas Serviços
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
                	
                    <h1>
                        <?php 
                            if($_SESSION['idioma'] == 'pt_br') { 
                                the_title();
                            } else { 
                                the_field('titulo');
                            }
                        ?>
                    </h1>
                    <a href="#" class="voltar"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "voltar" : "back" );  ?></a>
                    
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
            
            <!--Texto com imagem -->
            <div id="texto_imagem">

                    <?php 
                        if($_SESSION['idioma'] == 'pt_br') { 
                            the_content();
                        } else { 
                            the_field('texto');
                        }
                    ?>  
               
            </div>
            <!-- / Texto com imagem -->
            
            <!--Imagem -->
            <div id="imagem_texto">                
              <?php 
                    if ( has_post_thumbnail()) {
                       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
                       echo get_the_post_thumbnail($post->ID, 'full'); 
                     }
                ?>  
                
            </div>
            
			<?php endwhile; endif; ?>
			
            <div class="clear"></div>
            
<?php get_footer(); ?>
