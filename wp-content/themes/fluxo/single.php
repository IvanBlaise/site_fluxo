<?php
	/*
	* Template name: Equipamento
	*/
?>
<?php get_header('interna'); ?>
        
		<script>
			$(function(){
				$(".prod").click(function(){
					$('.lightbox').dialog({
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
                        <a href="<? bloginfo('url') ?>">Home</a> &gt; 
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
                	
                    
                     <a href="#" class="voltar"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "voltar" : "back" );  ?></a>
                    
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
            
            <!--Texto Interna -->
            <div id="texto_news">
            	
				<div class="campo_busca_imagem">
                    <form action="<?php bloginfo("url"); ?>">
                        <label for="pesquisa"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Pesquisa notícias" : "Search news:" );  ?>:</label>
                        <input id="pesquisa" type="text" name="s" />
                        <input type="submit" class="buscabt" value="Ok" />
                    </form>
            	</div>
				
            	<span class="data"><?php the_category(); ?></span>
            
            	<div class="topo_news">
                	<?php the_post_thumbnail(); ?>                   
                    
                    	<h1>
                            
                            <?php 
                                if($_SESSION['idioma'] == 'pt_br') { 
                                    the_title();
                                } else { 
                                    the_field('titulo');
                                }
                            ?>

                        </h1>
                        <span class="meta"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Autor" : "Author:" );  ?>: <?php $autor = get_post_custom_values("autor_noticia"); echo $autor[0]; ?></span>                        
					<?php
						$link_fonte_noticia = get_post_custom_values("link_fonte_noticia");
						$link_fonte_noticia = $link_fonte_noticia[0];
						if( $link_fonte_noticia ):
					?>
						<span class="meta"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Fonte" : "Source:" );  ?>: <a href="<?php echo $link_fonte_noticia; ?>"><?php $autor = get_post_custom_values("fonte_noticia"); echo $autor[0]; ?></a></span>
					<?php else: ?>
						<span class="meta"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Fonte" : "Source:" );  ?>: <?php $autor = get_post_custom_values("fonte_noticia"); echo $autor[0]; ?></span>
					<?php endif; ?>
                    <br />
                    
                
                    <?php 
                        if($_SESSION['idioma'] == 'pt_br') { 
                            the_content();
                        } else { 
                            the_field('texto');
                        }
                    ?>
                </div>
            	
            </div>
            <!-- / Texto Interna -->
            
			<?php endwhile; endif; ?>
            <div class="clear"></div>
            
<?php get_footer(); ?>