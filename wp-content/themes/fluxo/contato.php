<?php
	/*
	* Template name: Contato
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
                <?php if( have_posts() ): while( have_posts() ): the_post();  
				$image_id = get_post_thumbnail_id();
				$image_url = wp_get_attachment_image_src($image_id, 'full');
				$image_url = $image_url[0];
				?>
                <!--Titulo -->
                <div id="titulo">
                	
                    <h1><?php the_title(); ?></h1>
                    <a href="#" class="voltar">voltar</a>
                    
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
			</div>
            <!-- / Barra do topo -->
            
            <!--Texto com imagem -->
            <div id="texto_imagem">
            <?php the_content(); ?>
            	<?php $regioes = new WP_Query( array( "post_type" => "contatos-regiao" ) ); ?>
				<?php while( $regioes->have_posts() ): $regioes->the_post(); ?>
                
				<div id="<?php echo basename( get_permalink() ); ?>" class="regiao">
					
					<h1><?php the_title(); ?></h1>
					
					<div class="clear"></div>
					
					<?php the_content(); ?>
					
				</div>
				
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
            </div>
            <!-- / Texto com imagem -->
            <style>
					
					#texto_imagem .regiao h1{
						color: #23A057;
						font-family: tahoma;
						font-size: 20px;
						font-weight: normal;
						margin-left: 0;
					}
					#mapa img {
						z-index:1;
						float:left;
						position:absolute;
						right:0;
						top:0;
					}
					#mapa{
						position:relative;
					}
					#mapa a {
						text-indent:-9999px;
						cursor:pointer;	
					}
					#imagem_texto a#ba{
						float: none;
						height: 70px;
						position: absolute;
						right: 22px;
						top: 138px;
						display:block;
						z-index:9999;
						width: 95px;
					}
					#imagem_texto a#rn{
						float: none;
						height: 30px;
						position: absolute;
						right: 0;
						top: 93px;
						width: 33px;
						display:block;
						z-index:9999;
					}
					#imagem_texto a#rj{
						float: none;
						height: 22px;
						position: absolute;
						right: 57px;
						top: 260px;
						width: 36px;
						display:block;
						z-index:9999;
					}
					#imagem_texto a#sp{
						 float: none;
						height: 40px;
						position: absolute;
						right: 100px;
						top: 252px;
						width: 55px;
						display:block;
						z-index:9999;
					}
					
					#imagem_texto a#am{
						float: none;
						height: 115px;
						position: absolute;
						right: 210px;
						top: 31px;
						width: 150px;
						display:block;
						z-index:9999;
					}
					#imagem_texto a#rs{
						float: none;
						height: 54px;
						position: absolute;
						right: 141px;
						top: 324px;
						width: 68px;
						display:block;
						z-index:9999;
					}
					#imagem_texto a#pr{
						float: none;
						height: 40px;
						position: absolute;
						right: 135px;
						top: 283px;
						width: 55px;
						display:block;
						z-index:9999;
					}

					#imagem_texto a#pe{
					    display: block;
					    float: none;
					    height: 12px;
					    position: absolute;
					    right: 3px;
					    top: 128px;
					    width: 55px;
					    z-index: 9999;
					}

					#imagem_texto a#ce{
					    display: block;
					    float: none;
					    height: 45px;
					    position: absolute;
					    right: 36px;
					    top: 79px;
					    width: 20px;
					    z-index: 9999;
					}
					
					#imagem_texto a#mg{
						float: none;
						height: 40px;
						position: absolute;
						right: 65px;
						top: 215px;
						width: 55px;
						display:block;
						z-index:9999;
					}
						
					</style>
            <script>
						$(document).ready(function(){
							$(".regiao").hide();
							$("#geral").fadeIn("slow");
						
							
							
							$("#mapa a").click(function(){
								$(".regiao").hide();
								
								return false;
							});
							$("#am").click(function(){
								$("#amazonas").fadeIn("slow");
							});
							$("#rs").click(function(){
								$("#rio-grande-do-sul").fadeIn("slow");
							});
							$("#pr").click(function(){
								$("#parana").fadeIn("slow");
							});
							$("#mg").click(function(){
								$("#minas-gerais").fadeIn("slow");
							});
							
							$("#ba").click(function(){
								$("#bahia").fadeIn("slow");
							});
							$("#rn").click(function(){
								$("#rio-grande-do-norte").fadeIn("slow");
							});
							$("#rj").click(function(){
								$("#rio-de-janeiro").fadeIn("slow");
							});
							$("#sp").click(function(){
								$("#sao-paulo").fadeIn("slow");
							});
							$("#ce").click(function(){
								$("#ceara").fadeIn("slow");
							});
							$("#pe").click(function(){
								$("#pernambuco").fadeIn("slow");
							});
							
							
						});
						
					</script>
                    
            <!--Imagem -->
            <div id="imagem_texto">
            	
				<div id="mapa" style="background:url('http://www.fluxosolutions.com.br/wp-content/uploads/2011/09/mapa1.jpg') no-repeat top center; width:379px; height:391px; display:block;" >
					
                    <a href="#" id="am">Amazonas</a>
					<a href="#" id="rs">Rio Grande do Sul</a>
                    <a href="#" id="pr">Paraná</a>
                    <a href="#" id="mg">Minas Gerais</a>
					<a href="#" id="ce">Ceará</a>
					<a href="#" id="pe">Pernambuco</a>
					<a href="#" id="ba">Bahia</a>
					<a href="#" id="rn">Rio Grande do Norte</a>
					<a href="#" id="rj">Rio de Janeiro</a>
					<a href="#" id="sp">São Paulo</a>
                    
					
					
					
					
				</div>
            </div>
            <!-- / Imagem -->
            <?php endwhile; endif; ?>
            <div class="clear"></div>
            
<?php get_footer(); ?>