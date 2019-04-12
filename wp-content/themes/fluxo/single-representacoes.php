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
        <div id="conteudo_texto">
            
            <!--Barra do topo -->
            <div id="barra_topo">
            	
                <!--Breadcrumb e botoes de configuração -->
                <div class="configs">
                
                    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
					<div id="breadcrumb">
                    
                    <a href="<?php bloginfo('url')?>">Home</a> > <a href="<?php bloginfo('url')?>/representadas/"> Representadas</a> > 
                        <strong>
                            <?php 
                                if($_SESSION['idioma'] == 'pt_br') { 
                                    the_title();
                                } else { 
                                    the_field('titulo');
                                }
                            ?>
                        </strong>
                    
                    </div>
					
                    <?php include("incs/botoes.php"); ?>
                    
                    <div class="clear"></div>
                    
                </div>
                <!-- / Breadcrumb e botoes de configuração -->
                
                <!--Titulo -->
                <div id="titulo">
                	
                    <?php $id_eq = $post->ID; ?>
                     <?php if ( has_post_thumbnail()){
						$imagem = "<a href=" . wp_get_attachment_url( get_post_thumbnail_id( $post->ID )) . " class='light'>". get_the_post_thumbnail( $id_eq  , 'img_sidebar375x500' )."</a>";
						} else { } ?>
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
             <?php endwhile;endif; ?>   
                <ul>
			<?php $quer_eqp = new WP_Query( array( "post_type" => "produtos" ) ); ?>
			<?php while( $quer_eqp->have_posts() ): $quer_eqp->the_post(); ?>
			<?php $ep_prod_id = get_post_custom_values("representadas_produto"); $ep_prod_id = $ep_prod_id[0]; ?>
				<?php if( $id_eq == $ep_prod_id ){?>
					<li>
                        <a href="<?php bloginfo('url')?>/pagina-light-box-produtos?id-prod=<?php echo $post->ID; ?>" class="light" id-prod="<?php echo $post->ID; ?>">
                        <?php 
                            if($_SESSION['idioma'] == 'pt_br') { 
                                the_title();
                            } else { 
                                the_field('titulo');
                            }
                        ?>
                        </a>
                    </li>
				<?php } else { ?>
			
			<?php }; endwhile; ?>
				</ul>
                
                
            </div>
            <!-- / Texto com imagem -->
            
            <!--Imagem -->
            <div id="imagem_texto" class="single_representada">
            	<?php echo $imagem; ?>
            </div>
            <!-- / Imagem -->
            
			
            
            
<?php get_footer(); ?>