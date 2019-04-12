<?php
	/*
	* Template name: Galeria
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
                	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.galleriffic.js"></script>

                    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/galleriffic-2.css" type="text/css" />
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
            <div id="texto_imagem" style="width:100%">
            	
<!-- Start Advanced Gallery Html Containers -->
					<div id="controls" class="controls"></div>
                    <div id="thumbs" class="navigation">
					<ul class="thumbs noscript">
                    
                    	<?php
							$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
							$attachments = get_posts($args);
							if ($attachments) {
								foreach ( $attachments as $attachment ) {

							if( apply_filters( 'the_title' , $attachment->post_title ) != "destaque" ) {
						?>
                        
                        
                        <li>
							<a class="thumb" name="leaf" href="<?php echo wp_get_attachment_url($attachment->ID); ?>" title="<?php echo wp_get_attachment_url($attachment->ID); ?>" alt="<?php echo apply_filters( 'the_title' , $attachment->post_title ); ?>">
								<img src="<?php echo wp_get_attachment_url($attachment->ID); ?>" alt="<?php echo apply_filters( 'the_title' , $attachment->post_title ); ?>" title="<?php echo apply_filters( 'the_title' , $attachment->post_title ); ?>" data-thumb="<?php echo wp_get_attachment_url($attachment->ID); ?>"/>
							</a>
							<div class="caption">								
								<div class="image-title"><?php echo apply_filters( 'the_title' , $attachment->post_title ); ?></div>
								<?php 
		                            if($_SESSION['idioma'] == 'pt_br') { 
		                        ?>

									<div class="image-desc"><?php echo apply_filters( 'post_content' , $attachment->post_content ); ?></div> 
		                        <?
		                            } else { 
		                        ?>
									<div class="image-desc"><?php echo apply_filters( 'post_excerpt' , $attachment->post_excerpt ); ?></div> 
		                        <?
		                            }
		                        ?>

								
							</div>
						</li>
                        
                   
                            <?php 
							}else { }
							
							}
							
                            }
                            ?>
						
					</ul>
				</div>
				<div id="gallery" class="content">
                
					
					<div class="slideshow-container">
                    	<div id="caption" class="caption-container"></div>
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					
				</div>
				
				<div style="clear: both;"></div>
			</div>
		</div>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '658', 'margin' : '0 auto'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 8,
					preloadAhead:              10,
					enableTopPager:            false,
					enableBottomPager:         false,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pausar Slideshow',
					prevLinkText:              '',
					nextLinkText:              '',
					nextPageLinkText:          '',
					prevPageLinkText:          '',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', 1.0).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 1.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
		</script>


            </div>
            <!-- / Texto com imagem -->
            
          
            
			<?php endwhile; endif; ?>
			
            <div class="clear"></div>
            
<?php get_footer(); ?>
