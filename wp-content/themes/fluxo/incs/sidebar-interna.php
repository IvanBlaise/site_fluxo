<!-- .logo - imagem flutuante -->
<div class="logo">
    <a href="<?php bloginfo("url"); ?>">
        <img src="<?php bloginfo("template_url"); ?>/imgs/logo_fluxo_topo.png" alt="Logo Fluxo" />
    </a>    
</div>
<!-- /.logo -->

<!-- Busca -->
<form id="buscaSite" action="<?php bloginfo('url')?>" method="get">
	<input type="hidden" name="post_type" value="todos" />
	<input type="text" name="s" placeholder="<?php echo ( $_SESSION['idioma'] == 'pt_br' ? "O que você Procura?" : " What are you looking for?" );  ?>" />
    <input type="submit" value="Ok" />
</form>
<!-- /Busca -->

<!-- .newsletter - Newsletter -->
<div class="newsletter">
    <ul>
    <h3><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Últimas Notícias" : " Latest News" );  ?> </h3>
<?php $query_news = new WP_Query( array( "post_type" => "post", "posts_per_page" => "3" ) ); ?>
<?php if( $query_news->have_posts() ): while( $query_news->have_posts() ): $query_news->the_post(); ?>
			<?php
				$category = get_the_category(); 
				$categoria =  $category[0]->cat_name;
			?>

        <li>
             <h2><?php echo $categoria; ?></h2>
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
	
<?php endwhile;endif; ?>
	</ul>
</div>
<!-- /.newsletter -->

<!-- .box de Responsabilidade Social -->
<div class="box" style="padding:0; border:none;">
	
	
	<script>
		
		<?php
			if($_SESSION['idioma'] == 'pt_br') {
		?>

			var flashvars = {
				banner_xml : 'http://www.fluxosolutions.com.br/wp-content/themes/fluxo/incs/banners.xml'
			};

		<?php 
		 	} else { 
		?>

			var flashvars = {
				banner_xml : 'http://www.fluxosolutions.com.br/wp-content/themes/fluxo/incs/banners_en_us.xml'
			};

		<?php 
			}
		?>
		
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
			"<?php bloginfo('template_url')?>/incs/FLUXO.swf", 
			"banner-lateral", "210", "300", "10.0.0", 
			"expressInstall.swf", 
			flashvars, params, attributes);
	</script>
	<div id="banner-lateral"> 
	
	</div>
	
  
</div>
<!-- /.box de Responsabilidade Social -->
<!-- .box de Empresa parceira -->

<!-- /.box de Empresa parceira -->