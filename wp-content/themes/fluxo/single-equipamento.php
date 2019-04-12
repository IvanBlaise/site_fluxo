<?php get_header('interna'); ?>
        
		<script>
			$(function(){
				$(".prod").click(function(){
					var id_prod = $(this).attr("id-prod");
					$('.lightbox-' + id_prod).dialog({
						minWidth: 675,
						resizable: false,
						closeText: 'X',
						modal: true
					});
				});
			});
		</script>
		
        <!--Conteudo com texto -->
        <div id="conteudo_texto">
            
            <!--Barra do topo -->
            <div id="barra_topo">
            	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
                
                
                <!--Breadcrumb e botoes de configuração -->
                <div class="configs">
                	<div id="breadcrumb">
                    
                    <a href="<?php bloginfo('url')?>">Home</a> > <a href="<?php bloginfo('url')?>/equipamento/"> <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Equipamentos" : "Equipaments" ); ?> </a> > 
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
                	
					<?php $id_eq = $post->ID; $titulo = get_the_title();  ?>


                    <?php if ( has_post_thumbnail()){
						$imagem = "<a href=" . wp_get_attachment_url( get_post_thumbnail_id( $post->ID )) . " class='light'><img width='350' src=". wp_get_attachment_url( get_post_thumbnail_id( $post->ID )). " alt=" . $titulo . " /></a>";
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
                    <a href="javascript:history.back()" class="voltar">voltar</a>
                    
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
                
				<ul>
			<?php $quer_eqp = new WP_Query( "post_type=produtos&showposts=-1" ); ?>
			<?php while( $quer_eqp->have_posts() ): $quer_eqp->the_post(); ?>
			<?php $ep_prod_id = get_post_custom_values("equipamento_produto");
			
			 $ep_prod = $ep_prod_id[0]; ?>
				<?php if( $id_eq == $ep_prod ){?>
					<li>
                        <a href="<?php the_permalink(); ?>" id-prod="<?php echo $post->ID; ?>">
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
			
			<?php }; endwhile; wp_reset_query(); ?>
				</ul>
				
            </div>
            <!-- / Texto com imagem -->
            
            <!--Imagem -->
            <div id="imagem_texto">
            	<?php echo $imagem; ?>
            </div>
            <!-- / Imagem -->
            
			<?php endwhile; endif; ?>
            <div class="clear"></div>
			
			
			
<?php get_footer(); ?>