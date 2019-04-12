<?php
	/*
	* Template name: História
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
				 <?php $id_post = $post->ID; ?>
				 
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
            	
                <?php $query_hist = new WP_Query( array( 'post_type' => 'historia', 'order' => 'DESC', 'posts_per_page' => -1, 'orderby' => 'title' ) ); ?>
				<?php if( $query_hist->have_posts() ): while( $query_hist->have_posts() ): $query_hist->the_post(); ?>
				
				<div class="ano_historia">
					<span class="ano">
                        
                        <?php 
                            
                                the_title();
                            
                        ?>
                  
                    

                    </span>
					<?php 
                        if($_SESSION['idioma'] == 'pt_br') { 
                            the_content();
                        } else { 
                            the_field('texto');
                        }
                    ?>
					<div class="clear"></div>
				</div>
				
				<?php endwhile; endif; ?>
                
            </div>
            <!-- / Texto com imagem -->
            
            <!--Imagem -->
            <div id="imagem_texto">
            
             <?php
			$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $id_post, 'order' => 'ASC' ); 
			$attachments = get_posts($args);
			if ($attachments) {
				foreach ( $attachments as $attachment ) {
					
					?>
            	
               <img src="<?php echo wp_get_attachment_url($attachment->ID); ?>" alt="<?php echo apply_filters( 'the_title' , $attachment->post_title ); ?>">
                <p><?php echo apply_filters( 'the_title' , $attachment->post_title ); ?></p>
                
              <?php  } 
			}?>
                
            </div>
            <!-- / Imagem -->
            <?php endwhile; endif; ?>
            <div class="clear"></div>
            
<?php get_footer(); ?>