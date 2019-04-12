<?php
	/*
	* Template name: Lightbox Produtos
	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script> <!-- Biblioteca de JS -->
</head>

<body style="float:left; display:block; width:650px; height:500px;">
	<div style="width:650px;">
    	<style type="text/css">
.lightbox {
	float:left;	
	width:650px;
	display:block !important;
}
.lightbox p {
	font-size:12px;
	font-family:Tahoma, Geneva, sans-serif;
	color:#878787;
	margin-bottom:15px;	
}
.lightbox .barraL {
	float:left;
	border:1px solid #CCC;
	padding:10px;
	width:330px;	
}
.lightbox .barraR {
	width:279px;
	float:left;
	margin-left:15px;
	min-height:200px;	
}
.lightbox .barraR img {
	border:1px solid #CCC;	
}
.lightbox .barraR ul {
	margin:15px 0 20px 0;
}
.lightbox .barraR ul li {
	list-style:none;
	display:inline;
	margin-left:5px;	
}
.lightbox .barraR ul li:first-child {
	margin:0 0 0 4px;	
}
.ui-widget-content .lightbox a {
	font-size:12px;
	font-weight:bold;
	color:#13994b;
}
#fluxo .ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br {
	padding:1.2em;
}
</style>
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
			<?php 

			$quer_eqp = new WP_Query( array( "post_type" => "produtos", 'posts_per_page' => -1, ) ); ?>
			<?php while( $quer_eqp->have_posts() ): $quer_eqp->the_post(); ?>
            	<?php $id_eq = $post->ID; ?>
            	<?php if( $id_eq == $_REQUEST["id-prod"] ){?>
	<div class="lightbox">
	<!-- Texto + informações -->
    	<h1 style="font-family:Tahoma, Geneva, sans-serif; font-size:16px; color:#000; font-weight:bold;>"><?php the_title();?></h1>
						<div class="barraL">
						<?php the_content(); ?>
						</div>
						<!-- /.barraL -->
						<!-- Barra lateral + galeria de imagem -->
						<div class="barraR">
							<img class="img_dest" />
							<ul class="galeria">
								<?php
								$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID, 'oder' => 'ASC' ); 
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
<?php } else { ?>
			
			<?php }; endwhile; ?>
    
    </div>
</body>
</html>