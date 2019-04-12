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
                    
                    <a href="<?php bloginfo('url')?>">Home</a> > <a href="/eventos"> <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Eventos" : "Events" );  ?></a> > <strong><?php the_title(); ?></strong>
                    
                    </div>
                    
                    <?php include("incs/botoes.php"); ?>
                    
                    <div class="clear"></div>
                    
                </div>
                <!-- / Breadcrumb e botoes de configuração -->
                
                <!--Titulo -->
                <div id="titulo">
                	
					<?php $id_eq = $post->ID; ?>
                    <h1 style="text-transform:none">
                        <?php 
                            if($_SESSION['idioma'] == 'pt_br') { 
                                the_title();
                            } else { 
                                the_field('titulo');
                            }
                        ?>
                    </h1>
                    <a href="javascript:history.back()" class="voltar"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "voltar" : "back" );  ?></a>
                    <?php 
                    	$data = get_field('data_do_evento');

                    	$data = explode('/', $data);

                        if($_SESSION['idioma'] == 'pt_br') { 
                        	switch ($data[1]) {
                        		case '01':
                        			$mes = 'Janeiro';
                        			break;
                        		case '02':
                        			$mes = 'Fevereiro';
                        			break;
                        		case '03':
                        			$mes = 'Março';
                        			break;
                        		case '04':
                        			$mes = 'Abril';
                        			break;
                        		case '05':
                        			$mes = 'Maio';
                        			break;
                        		case '06':
                        			$mes = 'Junho';
                        			break;
                        		case '07':
                        			$mes = 'Julho';
                        			break;
                        		case '08':
                        			$mes = 'Agosto';
                        			break;
                        		case '09':
                        			$mes = 'Setembro';
                        			break;
                        		case '10':
                        			$mes = 'Outubro';
                        			break;
                        		case '11':
                        			$mes = 'Novembro';
                        			break;
                        		case '12':
                        			$mes = 'Dezembro';
                        			break;
                        	}
                        } else { 
                           switch ($data[1]) {
                            case '01':
                                    $mes = 'January';
                                    break;
                                case '02':
                                    $mes = 'February';
                                    break;
                                case '03':
                                    $mes = 'March';
                                    break;
                                case '04':
                                    $mes = 'April';
                                    break;
                                case '05':
                                    $mes = 'May';
                                    break;
                                case '06':
                                    $mes = 'June';
                                    break;
                                case '07':
                                    $mes = 'July';
                                    break;
                                case '08':
                                    $mes = 'August';
                                    break;
                                case '09':
                                    $mes = 'September';
                                    break;
                                case '10':
                                    $mes = 'October';
                                    break;
                                case '11':
                                    $mes = 'November';
                                    break;
                                case '12':
                                    $mes = 'December';
                                    break;
                                }
                        }
                    ?>
                    <div class="clear"></div>
                    <h2 style="text-transform:none;"> <span style="color: #149C4D;  font-weight:lighter;"> <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Próximo evento" : "Next event" );  ?>: </span> <? echo $mes ?>/<? echo $data[2]; ?> </h2>
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
            
            <!--Texto com imagem -->
            <div id="texto_imagem">
            	
         <style>
				div.ui-dialog div.ui-dialog-titlebar span#ui-dialog-title-1.ui-dialog-title{
					color:#fff;
				}
			</style>
                        



						 
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
            <div id="imagem_texto" class="imgEvento">

                    <script type="text/javascript">
                                $(function(){
                                    $("#imagem_texto .galeria li").click(function(){
                                        var img = $("img",this).attr("src");
                                        
                                        $("#imagem_texto .img_dest").fadeOut("normal",function(){
                                            $(this).attr("src",img);
                                        });
                                        
                                        $("#imagem_texto .img_dest").fadeIn("fast");
                                        
                                    });
                                    
                                    var primeira_img = $("#imagem_texto .galeria li:first img").attr("src");
                                    $("#imagem_texto  .img_dest").attr("src", primeira_img);
                                    
                                });
                            </script>

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
            <!-- / Imagem -->
            
			<?php endwhile; endif; ?>
            <div class="clear"></div>

			
<?php get_footer(); ?>