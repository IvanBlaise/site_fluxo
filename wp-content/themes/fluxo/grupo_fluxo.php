<?php
	/*
	* Template name: Grupo Fuxo
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
                
                <!--Titulo -->
                <div id="titulo">
                	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
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
            <div id="grupo_fluxo">
			<?php $query_hist = new WP_Query( array( 'post_type' => 'grupo-fluxo', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
			<?php if( $query_hist->have_posts() ): while( $query_hist->have_posts() ): $query_hist->the_post(); ?>
            	<!-- Grupo -->
            	<div class="grupo">
		           	<!-- imagem do grupo -->
	                <div class="img"><?php the_post_thumbnail(); ?></div>
		           	<!-- Textos do grupo -->
	                <div class="texto">
		                <span class="destaque">
                            <?php 
                                if($_SESSION['idioma'] == 'pt_br') { 
                                    the_title();
                                } else { 
                                    the_field('titulo');
                                }
                            ?>
                        </span>
			           	<p>
                            <?php 
                                if($_SESSION['idioma'] == 'pt_br') { 
                                    the_content();
                                } else { 
                                    the_field('texto');
                                }
                            ?>
                        </p>
		                <?php
						$link = get_post_custom_values('link_grupo');
						$link = $link[0];
						if($link) {
						if($post->ID == 84 || $post->ID == 86) {?>
                        	<a href="<?php $link = get_post_custom_values('link_grupo'); echo $link[0]; ?>" target="_blank">● <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Ver prospecto" : "View Flyer" ); ?> </a>
                        <?php }else {?>
                        	<a href="<?php $link = get_post_custom_values('link_grupo'); echo $link[0]; ?>" target="_blank">● <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Ir para o site" : "Go to website" ); ?> </a>
                        <?php } 
						}
						?>
	                </div>
					<div class="clear"></div>           	
	           	</div>
               	<!-- /Grupo -->
			<?php endwhile; endif; ?>
            </div>
            <!-- / Texto com imagem -->
			
            <?php endwhile; endif; ?>
            <div class="clear"></div>
            
<?php get_footer(); ?>