<?php
	/*
	* Template name: Produtos
	*/
?>
<?php get_header('interna'); ?>
        
		
        <!--Conteudo com texto -->
        <div id="conteudo_texto">
            
            <!--Barra do topo -->
            <div id="barra_topo">
            	
                <!--Breadcrumb e botoes de configuração -->
                <div class="configs">
                	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
					<div id="breadcrumb">
                    <?php $equipamento = get_post_meta( $post->ID , 'representadas_produto', true ); $tituloRepresentada = get_the_title($equipamento);  ?>
                    <a href="<?php bloginfo('url')?>">Home</a> > <a href=""> Produtos</a> >  
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
            <div id="texto_imagem" style="width:100%">
            	
         <style>
				div.ui-dialog div.ui-dialog-titlebar span#ui-dialog-title-1.ui-dialog-title{
					color:#fff;
				}
			</style>
            <script type="text/javascript">
								$(function(){
									$(".barraR .galeria li").click(function(){
										var img = $("img",this).attr("src");
										
										$(".barraR .img_dest").fadeOut("normal",function(){
											$(this).attr("src",img);
										});
										
										$(".barraR .img_dest").fadeIn("fast");
										
									});
									
									var primeira_img = $(".barraR .galeria li:first img").attr("src");
									$(".barraR  .img_dest").attr("src", primeira_img);
									
								});
							</script>


						<!-- Texto + informações -->
						<div class="barraL">
						<?php 
			                if($_SESSION['idioma'] == 'pt_br') { 
			                    the_content();
			                } else { 
			                    the_field('texto');
			                }
			            ?>
						<a href="<?php echo get_permalink($equipamento) ?>"><?php echo $tituloRepresentada; ?></a>
						</div>
						<!-- /.barraL -->
						<!-- Barra lateral + galeria de imagem -->
						<div class="barraR">
							<img class="img_dest" />
							<ul class="galeria">
								<?php
								$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID, orderby=>'menu_order' ); 
								$attachments = get_posts($args);
								if ($attachments) {
									foreach ( $attachments as $attachment ) {
								?>
								<li><img src="<?php echo wp_get_attachment_url($attachment->ID); ?>" width="33" alt="<?php echo apply_filters( 'the_title' , $attachment->post_title ); ?>" /></li>
								<?php
									}
								}
								?>
							</ul>
							
					
							
						</div>
				

				


            </div>
            <!-- / Texto com imagem -->
            
            <!--Imagem -->
            <div id="imagem_texto">

                
            </div>
            <!-- / Imagem -->
            
			<?php endwhile; endif; ?>
            <div class="clear"></div>

			
<?php get_footer(); ?>