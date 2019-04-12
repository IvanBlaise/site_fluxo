<?php
	/*
	* Template name: LIsta Noticias
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
                	
                    <h1><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Busca" : "Search" );  ?></h1>
                    <a href="#" class="voltar"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "voltar" : "back" );  ?></a>
                    
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
            <?php if($_SESSION['idioma'] == 'pt_br') { ?> 
                <!--Texto com imagem -->
                <div id="grupo_fluxo">
                	<div class="campo_busca_imagem">
                        <form action="<?php bloginfo("url"); ?>">
                            <label for="pesquisa">Pesquisa notícias:</label>
                            <input id="pesquisa" type="text" name="s" />
                            <input type="submit" class="buscabt" value="Ok" />
                        </form>
                	</div>
    			<!-- resultado busca imagem -->
                	<?php query_posts($query_string . "'&posts_per_page=-1&paged=" . get_query_var('paged') ); ?>
                	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="busca_simples">
    		           	<!-- Textos do resultado busca imagem -->
    	                <div class="texto">
    					<p><?php the_title(); ?> </p>
                            <a href="<?php the_permalink(); ?>">Ler matéria>></a>

    	                </div>         	
    	           	</div>
                    <?php endwhile; endif; ?>
    				
    				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    				
                   	<!-- /resultado busca imagem -->
                </div>
                <!-- / Texto com imagem -->
            <?php 
                } else { 
            ?>

                 <!--Texto com imagem -->
                <div id="grupo_fluxo">
                    <div class="campo_busca_imagem">
                        <form action="<?php bloginfo("url"); ?>">
                            <label for="pesquisa">Find news:</label>
                            <input id="pesquisa" type="text" name="s" />
                            <input type="submit" class="buscabt" value="Ok" />
                        </form>
                    </div>
                <!-- resultado busca imagem -->
                    <?php query_posts($query_string . "'&posts_per_page=-1&paged=" . get_query_var('paged') ); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="busca_simples">
                        <!-- Textos do resultado busca imagem -->
                        <div class="texto">
                        <p>
                            <?php 
                                if($_SESSION['idioma'] == 'pt_br') { 
                                    the_title();
                                } else { 
                                    the_field('titulo');
                                }
                            ?>
                        </p>
                            <a href="<?php the_permalink(); ?>">View >></a>

                        </div>          
                    </div>
                    <?php endwhile; endif; ?>
                    
                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                    
                    <!-- /resultado busca imagem -->
                </div>
                <!-- / Texto com imagem -->

            <?php 
                } 
            ?>
    			
            <div class="clear"></div>
            
<?php get_footer(); ?>