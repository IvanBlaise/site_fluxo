			<div id="barra_topo">
				
				<!--Breadcrumb e botoes de configuração -->
				<div class="configs">
					
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<div id="breadcrumb">','</div>');
						}
					?>
					<div id="botoes">
						
						<a href="#" class="aumenta_fonte">A+</a>
						<a href="#" class="diminui_fonte">A-</a>
						<a href="#" class="enviar">Enviar</a>
						<a href="#" class="imprimir">Imprimir</a>
						
					</div>
					
					<div class="clear"></div>
					
				</div>
				<!-- / Breadcrumb e botoes de configuração -->
				
				<!--Titulo -->
				<div id="titulo">
					<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
                    <h1><?php the_title(); ?></h1>
					<a href="#" class="voltar">voltar</a>
					
					<div class="clear"></div>
					
				</div>
				<!--Titulo -->
				
			</div>