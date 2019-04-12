<?php
	session_start('guia-fluxo');
	if( $_SESSION['idioma'] == '') { 
        $_SESSION['idioma'] = 'pt_br';
    }
?>
<!-- ul - listagem do menu -->
<ul>
	<?php if($_SESSION['idioma'] == 'pt_br') { ?> 
		<?php wp_nav_menu(array('menu'=>'menu_principal','theme_location'=>'menu_principal')); ?> 
	
   	<?php } else {  ?>
   		<?php wp_nav_menu(array('menu'=>'menu_ingles','theme_location'=>'menu_ingles')); ?> 
   	
   	<?php } ?>
</ul>     
<!-- /ul -->
<!--div id="lista-representacoes" title="Representações">
	
	<?php $query_rep = new WP_Query( array( 'post_type' => 'representacoes' ) ); ?>
	<?php if( $query_rep->have_posts() ): while( $query_rep->have_posts() ): $query_rep->the_post(); ?>
	
	<a href="<?php the_permalink(); ?>"> - <?php the_title(); ?></a>
	
	<?php endwhile; endif; ?>
	   
</div-->