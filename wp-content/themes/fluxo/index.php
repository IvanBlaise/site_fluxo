<?php get_header(); ?>

        <script src="<?php bloginfo('template_url'); ?>/js/swfobject.js"></script>
		<!-- SCRIPT 
		<script type="text/javascript">
		$(window).load(function() {

			$(".representacoes").click(function(){
				$('#lista-representacoes').dialog({
					minWidth: 380,
					resizable: false,
					closeText: 'X',
					modal: true
				});
			});
		});
		</script>
		<!-- /SCRIPT -->
		
	<script>
		var flashvars = {
			banner_xml : 'http://www.fluxosolutions.com.br/wp-content/themes/fluxo/banners.php'
		};
		var params = {
			menu: "false",
			scale: "scale",
			allowFullscreen: "true",
			allowScriptAccess: "always",
			bgcolor: "",
			wmode: "transparent" // can cause issues with FP settings & webcam
		};
		var attributes = {
			id:"banner-home"
		};
		swfobject.embedSWF(
			"<?php bloginfo('template_url')?>/banner-home.swf", 
			"banner", "750", "310", "10.0.0", 
			"expressInstall.swf", 
			flashvars, params, attributes);
	</script>
    
		<!-- .slider - Banner rotativo -->
        <div id="slider">
        	
			<div id="banner">
            
            </div>

        </div>
        <!-- /.slider -->
        <!-- Chamada Notícias Newsletter -->
        <div class="chamada">
        	<!-- Título -->
        	<div class="titulo">
            	<h2><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Notícias do newsletter" : "Newsletter News" );  ?> </h2>
                <a href="<?php bloginfo("url"); ?>/lista-noticias"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "VER TODAS" : "SEE ALL" );  ?></a>
            </div>
        	<!-- /.Título -->
            
            <?php $cont = 0; ?>
            <?php $query_noticias = new WP_Query( array( "post_type" => "post", "posts_per_page" => 11 ) ); ?>
            <?php if( $query_noticias->have_posts() ): while( $query_noticias->have_posts() ): $query_noticias->the_post(); ?>
            
            <?php
				$category = get_the_category(); 
				$categoria =  $category[0]->cat_name;
			?>
            
            <?php if($cont == 0): ?>
            <!-- .coluna1 - Listagem Principal Engenharia + Política + Ecologia -->
            <div class="coluna1">
            <?php endif; ?>
             
            <?php if($cont <= 2): ?>
            
            	<!-- .destaque - Chamada em  destaque -->
                <div class="destaque">
                		<a href="<?php the_permalink(); ?>">
                    	<?php the_post_thumbnail(array(134, 111)); ?>
                        </a>
                        <h3>
						<?php	$posttags = get_the_tags();
								$cont2 = 0; 
								if($posttags){ 
									foreach($posttags as $tag){
										$cont2++;
										if($cont2 != sizeof($posttags)){
											if($_SESSION['idioma'] == 'pt_br') { 
												echo $tag->name;
											} else { 

												switch ($tag->name) {
												    case "REPRESENTADAS":
												        echo "PRINCIPALS";
												        break;
												    case "CESSÃO ONEROSA":
												        echo "Assignment";
												        break;
												    case "SERVIÇOS":
												        echo "SERVICES";
												        break;
												    case "PROJETOS":
												        echo "PROJECTS";
												        break;
													case "PRODUTOS":
												        echo "PRODUCTS";
												        break;
												    case "TESTE":
												        echo "TEST";
												        break;
												    case "EVENTOS":
												        echo "EVENTS";
												        break;
												    case "CAPA":
												        echo "FRONT PAGE";
												        break;
												    case "SOLUÇÕES INTEGRADAS":
												        echo "INTEGRATED SOLUTIONS";
												        break;
												   	case "PROTÓTIPO":
												        echo "PROTOTYPE";
												        break;
												    case "AUTOMIND":
												        echo "AUTOMIND";
												        break;
												}

											}
										}else {
											if($_SESSION['idioma'] == 'pt_br') { 
												echo $tag->name;
											} else { 

												switch ($tag->name) {
												    case "REPRESENTADAS":
												        echo "PRINCIPALS";
												        break;
												    case "CESSÃO ONEROSA":
												        echo "Assignment";
												        break;
												    case "SERVIÇOS":
												        echo "SERVICES";
												        break;
												    case "PROJETOS":
												        echo "PROJECTS";
												        break;
													case "PRODUTOS":
												        echo "PRODUCTS";
												        break;
												    case "TESTE":
												        echo "TEST";
												        break;
												    case "EVENTOS":
												        echo "EVENTS";
												        break;
												    case "CAPA":
												        echo "FRONT PAGE";
												        break;
												    case "SOLUÇÕES INTEGRADAS":
												        echo "INTEGRATED SOLUTIONS";
												        break;
												   	case "PROTÓTIPO":
												        echo "PROTOTYPE";
												        break;
												    case "AUTOMIND":
												        echo "AUTOMIND";
												        break;
												}

											}
										}
									}
								};
						?>
                </h3>
                        

                        <h4>
						  	<?php 
                                if($_SESSION['idioma'] == 'pt_br') { 
                                    the_title();
                                } else { 
                                    the_field('titulo');
                                }
                            ?>
                        </h4>

                        <?php 
                            if($_SESSION['idioma'] == 'pt_br') { 
                                the_excerpt();
                            } else { 
                               echo substr( get_field('texto'), 0, 80 ) . '...';
                            }
                        ?>

                     


                        <a href="<?php the_permalink(); ?>"> <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Leia mais" : "Read More" );  ?>  &gt;&gt;</a> 
                </div>	
                <!-- /.destaque -->
             
             <?php else: ?>
                
				<?php if( $cont >= 2 & $cont <= 3 ): ?>             
                </div>
                <!-- /.coluna1 -->
                <!-- .coluna2 - Listagem de Novidades -->
                <div class="coluna2">
                    <!-- .listagem - Listagem de outras Notícias -->
                    <ul>
                    
                <?php endif; ?>
                
                        <li>
                            <h3>
								<?php $posttags = get_the_tags();
									$cont2 = 0; 
								if($posttags){ 
									foreach($posttags as $tag){
										$cont2++;
										if($cont != sizeof($posttags)){
											if($_SESSION['idioma'] == 'pt_br') { 
												echo $tag->name;
											} else { 

												switch ($tag->name) {
												    case "REPRESENTADAS":
												        echo "REPRESENTED";
												        break;
												    case "CESSÃO ONEROSA":
												        echo "Assignment";
												        break;
												    case "SERVIÇOS":
												        echo "SERVICES";
												        break;
												    case "PROJETOS":
												        echo "PROJECTS";
												        break;
													case "PRODUTOS":
												        echo "PRODUCTS";
												        break;
												    case "TESTE":
												        echo "TEST";
												        break;
												    case "EVENTOS":
												        echo "EVENTS";
												        break;
												    case "CAPA":
												        echo "HOME";
												        break;
												    case "SOLUÇÕES INTEGRADAS":
												        echo "INTEGRATED SOLUTIONS";
												        break;
												   	case "PROTÓTIPO":
												        echo "PROTOTYPE";
												        break;
												    case "AUTOMIND":
												        echo "AUTOMIND";
												        break;
												    case  "NOVIDADES":
										        		echo "NOVELTY";
										        		break;
												}

											}
										}else {

											if($_SESSION['idioma'] == 'pt_br') { 
												echo $tag->name;
											} else { 

												switch ($tag->name) {
												    case "REPRESENTADAS":
												        echo "REPRESENTED";
												        break;
												    case "CESSÃO ONEROSA":
												        echo "Assignment";
												        break;
												    case "SERVIÇOS":
												        echo "SERVICES";
												        break;
												    case "PROJETOS":
												        echo "PROJECTS";
												        break;
													case "PRODUTOS":
												        echo "PRODUCTS";
												        break;
												    case "TESTE":
												        echo "TEST";
												        break;
												    case "EVENTOS":
												        echo "EVENTS";
												        break;
												    case "CAPA":
												        echo "HOME";
												        break;
												    case "SOLUÇÕES INTEGRADAS":
												        echo "INTEGRATED SOLUTIONS";
												        break;
												   	case "PROTÓTIPO":
												        echo "PROTOTYPE";
												        break;
										          	case "AUTOMIND":
										        		echo "AUTOMIND";
										        		break;
										        	case  "NOVIDADES":
										        		echo "NOVELTY";
										        		break;
												}

											}

										}
									}
								};?>
                </h3>
                            <h4>
                            	<a href="<?php the_permalink(); ?>">
                            		
									
									  	<?php 
			                                if($_SESSION['idioma'] == 'pt_br') { 
			                                    the_title();
			                                } else { 
			                                    the_field('titulo');
			                                }
			                            ?>    
                            	</a>
                            </h4>
                        </li>
                        
                <?php if( $cont >= 10 ): ?>
                        
                    </ul>
                    <!-- /.listagem -->
                </div>
                <!-- /.coluna2 -->
                
                <?php endif; ?>
            
			<?php endif; ?>
            
            <?php $cont++; endwhile; endif; ?>
        
<?php get_footer(); ?>