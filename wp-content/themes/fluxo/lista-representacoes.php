<?php
	/*
	* Template name: Lista Representações
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
                	
                    <h1>Representações</h1>
                    <a href="#" class="voltar">voltar</a>
                    
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
            
			<!-- resultado busca imagem -->
            	<?php
					$query_representacoes = new WP_Query( array( "post_type" => "representacoes", "orderby" => "title" ) );
				?>
				
                <?php if( $query_representacoes->have_posts() ): while( $query_representacoes->have_posts() ): $query_representacoes->the_post(); ?>
                <div class="busca_simples">
		           	<!-- Textos do resultado busca imagem -->
	                <div class="texto">
					<p><?php the_title(); ?> - <?php the_date("d/m/Y"); ?>  </p>
                        <a href="<?php the_permalink(); ?>">Ver>></a>

	                </div>         	
	           	</div>
                <?php endwhile; endif; ?>
				
				<?php wp_pagenavi() ?>
				
               	<!-- /resultado busca imagem -->
            </div>
            <!-- / Texto com imagem -->
			
            <div class="clear"></div>
            
<?php get_footer(); ?>