<?php
	/*
	* Template name: Página Eventos
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

<!-- aqui -->

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
            
              <?php 
                    if ( has_post_thumbnail()) {
                       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
                       echo get_the_post_thumbnail($post->ID, 'img_sidebar375x500'); 
                     }
                ?>  
                
            </div>


<!-- fim aqui -->



                
            </div>
            <!-- / Barra do topo -->
            <!--Texto com imagem -->
          <?php /*  <div id="texto_imagem" style="width:100%">
                
                
                
            </div> */?>
            <!-- / Texto com imagem -->

            <!--Texto com imagem -->
            <div id="texto_imagem">
                
              <ul>
                <?php 
                // Data atual
                $dataAtual = strtotime(date('d.m.Y')) ;
                $args = array( 
                    'post_type' => 'eventos', 
                    'posts_per_page' => -1  ,
                    'meta_key' => 'dataTratada'/*,
                    'meta_query' => array(
                        array(
                            'key' => 'dataTratada',
                            'compare' => '>=',
                            'value' => $dataAtual,
                        )
                    )*/
                ); 
                $query_rep = new WP_Query( $args ); ?>
                    <?php if( $query_rep->have_posts() ): while( $query_rep->have_posts() ): $query_rep->the_post(); ?>
                    
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            
                    </li>
                    
                    <?php endwhile; endif; wp_reset_query(); ?>

                </ul>
              
                
            </div>
            <!-- / Texto com imagem -->
            
          
            
            <?php endwhile; endif; ?>
            
            <div class="clear"></div>
            
<?php get_footer(); ?>