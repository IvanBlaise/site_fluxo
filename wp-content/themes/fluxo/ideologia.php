<?php
	/*
	* Template name: Ideologia
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
            	<!-- barra lateral ideologia -->
                <div class="ideologia">
					<?php $query_rep = new WP_Query( array( 'pagename' => 'a-organizacao/nossos-valores' ) ); ?>
					<?php if( $query_rep->have_posts() ): while( $query_rep->have_posts() ): $query_rep->the_post(); ?>
				
                	<h2>
                        <?php 
                            if($_SESSION['idioma'] == 'pt_br') { 
                                the_title();
                            } else { 
                                the_field('titulo');
                            }
                        ?>
                    </h2>
                    
                    <?php 
                        if($_SESSION['idioma'] == 'pt_br') { 
                            the_content();
                        } else { 
                            the_field('texto');
                        }
                    ?>

                </div>
               	<!-- /ideologia -->
                
				<?php endwhile; endif; ?>
				
            </div>
            <!-- / Imagem -->
            <?php endwhile; endif; ?>
            <div class="clear"></div>
            
<?php get_footer(); ?>