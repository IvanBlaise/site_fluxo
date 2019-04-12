<?php
	/*
	* Template name: Páginas Principais
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
                	
                    <h1><?php the_title(); ?></h1>
                    <a href="javascript:history.back()" class="voltar"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "voltar" : "back" );  ?></a>
                
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
            
            <!--Texto com imagem -->
            <div id="texto_imagem" style="width:100%">
            	
              <?php the_content(); ?>
              

<ul>
<?php
if($post->post_parent)
$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
else 
$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
if ($children) { ?>
<?php echo $children; ?>
<?php } ?>
</ul>


            </div>
            <!-- / Texto com imagem -->
            
          
            
			<?php endwhile; endif; ?>
			
            <div class="clear"></div>
            
<?php get_footer(); ?>
