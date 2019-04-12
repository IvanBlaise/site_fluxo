<?php
	/*
	* Template name: Resultado Busca Imagem
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
            	<div class="campo_busca_imagem">
                    <form action="<?php bloginfo("url"); ?>">
                        <label for="pesquisa"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Pesquisa Notícias" : "Search News" );  ?>:</label>
                        <input id="pesquisa" type="text" name="s" />
						<input type="hidden" name="post_type" value="post" />
                        <input type="submit" class="buscabt" value="Ok" />
                    </form>
            	</div>
			<!-- resultado busca imagem -->
            	<p class="arquivo">Arquivo:</p>
				
				<?php $query_news = new WP_Query( array( 
														"post_type" => "news", 
														"posts_per_page" => "10",
														"paged" => get_query_var('paged')
													) 
												);?>
				<?php if( $query_news->have_posts() ): while( $query_news->have_posts() ): $query_news->the_post(); ?>
				
            	<div class="busca_imagem">
                	<!-- imagem do resultado busca imagem -->
	                <div class="img">
					<a href="<?php bloginfo('url')?>/category/newsletter-<?php $edicao_newsletter = get_post_custom_values("edicao_newsletter"); echo $edicao_newsletter[0];  ?>/"><?php the_post_thumbnail(); ?></a></div>

		           	<!-- Textos do resultado busca imagem -->
	                <div class="texto">
					<?php 
                        if($_SESSION['idioma'] == 'pt_br') { 
                            the_title();
                        } else { 
                            the_field('titulo_newsletter');
                        }
                    ?>
					<p> <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Capa" : "Cap" );  ?>: 
                        <?php 
                            if($_SESSION['idioma'] == 'pt_br') {  
                                $capa = get_post_custom_values("capa"); echo $capa[0];
                            } else { 
                                the_field('capa_ingles');
                            } 
                        ?>
                    </p>

                    <?php 
                        if($_SESSION['idioma'] == 'pt_br') {  
                    ?>
                        <a href="<?php $pdf = get_post_custom_values("upload_pdf"); echo $pdf[0];  ?>" target="_blank">Baixar PDF</a><br>
                        <a href="<?php bloginfo('url')?>/category/newsletter-<?php $edicao_newsletter = get_post_custom_values("edicao_newsletter"); echo $edicao_newsletter[0];  ?>/">Lista de Notícias</a>
                    <?php 
                        } else {
                    ?>

                    <?php 

                                $attachment_id = get_field('pdf_ingles');
                                $url = wp_get_attachment_url( $attachment_id );
                                $title = get_the_title( $attachment_id );
                                
                        ?>



                        <!-- <a href="<?php  echo $attachment_id['url']; ?>" target="_blank">Download PDF</a><br> -->
                        <a href="<?php bloginfo('url')?>/category/newsletter-<?php $edicao_newsletter = get_post_custom_values("edicao_newsletter"); echo $edicao_newsletter[0];  ?>/">List of News</a>
                    <?php } ?>

                        <br />
	                </div> 
					<div class="clear"></div>           	
	           	</div>
                
				<?php endwhile; endif; ?>
				
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $query_news ) ); } ?>
				
               	<!-- /resultado busca imagem -->
            </div>
            <!-- / Texto com imagem -->
			
            <?php endwhile; endif; ?>
            <div class="clear"></div>
            
<?php get_footer(); ?>