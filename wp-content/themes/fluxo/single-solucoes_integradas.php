<?php
	/*
	* Template name: Soluções Integradas
	*/
?>
<?php get_header('interna'); ?>
      
 <script type="text/javascript">
        	$(document).ready(function() {

		
			$(".light").fancybox({
				'transitionIn'	:	'elastic',
				'transitionOut'	:	'elastic',
				'speedIn'		:	600, 
				'speedOut'		:	200, 
	
			});
			
		});
        </script>
        <!--Conteudo com texto -->
        <!--Conteudo com texto -->
        <div id="conteudo_texto">
            
            <!--Barra do topo -->
            <div id="barra_topo">
            	
                <!--Breadcrumb e botoes de configuração -->
                <div class="configs">
                <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
                    <div id="breadcrumb">
                    
                    <a href="<?php bloginfo('url')?>">Home</a> > <a href="<?php bloginfo('url')?>/solucoes-integradas//"> Soluções Integradas </a> > <strong><?php the_title(); ?></strong>
                    
                    </div>
					
                    <?php include("incs/botoes.php"); ?>
                    
                    <div class="clear"></div>
                    
                </div>
                <!-- / Breadcrumb e botoes de configuração -->
                
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

                 <a href="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" target="_blank"><img width="320" style="margin:5px ; float:left;" src="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="Certificações" /></a>
            	
				<?php
				$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID, 'oder' => 'ASC' ); 
				$attachments = get_posts($args);
				if ($attachments) {
					// foreach ( $attachments as $attachment ) {
						
						?>
					
				   <!-- <a href="<?php echo wp_get_attachment_url($attachment->ID); ?>" target="_blank"><img width="320" style="margin:5px ; float:left;" src="<?php echo wp_get_attachment_url($attachment->ID); ?>" alt="Certificações" /></a> -->

			      					
				  <?php
				  	// } 
				}
				?>
                
            </div>
            <!-- / Imagem -->
            
			<?php endwhile; endif; ?>
            <div class="clear"></div>
            
<?php get_footer(); ?>