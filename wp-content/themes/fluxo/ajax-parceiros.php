<?php
//Template Name: Parceiros Paginação

ob_start();
	/*
		Fluxo Soluções
		Produtora: Pulso Interativo [pulsointerativo.com.br]
		Desenvolvedor: RafaelDuim
		Data de Início : 13/07/12
	*/

$slug = $_POST['slug'];
$query_rep = new WP_Query( 
	array( 
		'post_type' => 'representacoes' ,  
		'name' => $slug,
		'showposts' => 1
		) 
); 
if( $query_rep->have_posts() ): while( $query_rep->have_posts() ): $query_rep->the_post(); ?>
<h3>
<?php 
    if($_SESSION['idioma'] == 'pt_br') { 
        the_title();
    } else { 
        the_field('titulo');
    }
?>
</h3>

<?php the_post_thumbnail('imgParceiros'); ?>
<?php 
	if($_SESSION['idioma'] == 'pt_br') { 
	    the_content();
	} else { 
	    the_field('texto');
	}
?>

<?php endwhile; endif; ?>