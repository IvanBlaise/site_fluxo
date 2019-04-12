<?php
//ob_start('guia-fluxo');
session_start('guia-fluxo');  
//Representações
add_action('init', 'eventos_register');
 
function eventos_register() {
 
	$labels = array(
		'name' => _x('Eventos', 'post type general name'),
		'singular_name' => _x('Evento', 'post type singular name'),
		'add_new' => _x('Adicionar', ''),
		'add_new_item' => __('Adicionar'),
		'edit_item' => __('Editar'),
		'new_item' => __('Adicionar'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Procurar'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada na lixeira'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/post-parceiros.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'eventos' , $args );
}
// CREATE UNIX TIME STAMP FROM DATE PICKER
function custom_unixtimesamp ( $post_id ) {
    if ( get_post_type( $post_id ) == 'eventos' ) {
    $startdate = get_post_meta($post_id, 'data_do_evento', true);

        if($startdate) {
            $dateparts = explode('/', $startdate);
            $newdate1 = strtotime(date('d.m.Y H:i:s', strtotime($dateparts[1].'/'.$dateparts[0].'/'.$dateparts[2])));
            update_post_meta($post_id, 'dataTratada', $newdate1  );
        }
    }
}
add_action( 'save_post', 'custom_unixtimesamp', 100, 2);
//Representações
add_action('init', 'representacoes_register');
 
function representacoes_register() {
 
	$labels = array(
		'name' => _x('Parceiros', 'post type general name'),
		'singular_name' => _x('Parceiro', 'post type singular name'),
		'add_new' => _x('Adicionar', 'portfolio item'),
		'add_new_item' => __('Adicionar'),
		'edit_item' => __('Editar'),
		'new_item' => __('Adicionar'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Procurar'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada na lixeira'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/post-parceiros.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'representacoes' , $args );
}

//Representações
add_action('init', 'hitoria_register');
 
function hitoria_register() {
 
	$labels = array(
		'name' => _x('Historia', 'post type general name'),
		'singular_name' => _x('Historia', 'post type singular name'),
		'add_new' => _x('Adicionar', 'portfolio item'),
		'add_new_item' => __('Adicionar'),
		'edit_item' => __('Editar'),
		'new_item' => __('Adicionar'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Procurar'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada na lixeira'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/post-parceiros.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor')
	  ); 
 
	register_post_type( 'historia' , $args );
}

	// post thumbnail support
	if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );

	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'newsletter', 98, 133, true );
		add_image_size( 'img_sidebar375x500', 375,500, false );
		add_image_size( 'imgParceiros', 355,500, false );
	}
	

//Grupo Fluxo
add_action('init', 'grupo_fluxo_register');
 
function grupo_fluxo_register() {
 
	$labels = array(
		'name' => _x('Grupo Fluxo', 'post type general name'),
		'singular_name' => _x('Grupo Fluxo', 'post type singular name'),
		'add_new' => _x('Adicionar', 'portfolio item'),
		'add_new_item' => __('Adicionar Grupo'),
		'edit_item' => __('Editar'),
		'new_item' => __('Adicionar'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Procurar'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada na lixeira'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/post-parceiros.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'thumbnail', 'editor')
	  ); 
 
	register_post_type( 'grupo-fluxo' , $args );
}

add_theme_support('post-thumbnails');

//Soluções Integradas
add_action('init', 'solues_integradas_register');
 
function solues_integradas_register() {
 
	$labels = array(
		'name' => _x('Soluções Integradas', 'post type general name'),
		'singular_name' => _x('Solução', 'post type singular name'),
		'add_new' => _x('Adicionar', 'portfolio item'),
		'add_new_item' => __('Adicionar'),
		'edit_item' => __('Editar'),
		'new_item' => __('Adicionar'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Procurar'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada na lixeira'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/post-parceiros.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'solucoes_integradas' , $args );
	flush_rewrite_rules();
}

//Equipamentos
add_action('init', 'equipamentos_register');
 
function equipamentos_register() {
 
	$labels = array(
		'name' => _x('Equipamentos', 'post type general name'),
		'singular_name' => _x('Equipamento', 'post type singular name'),
		'add_new' => _x('Adicionar', 'portfolio item'),
		'add_new_item' => __('Adicionar'),
		'edit_item' => __('Editar'),
		'new_item' => __('Adicionar'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Procurar'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada na lixeira'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/post-parceiros.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'equipamento' , $args );
	flush_rewrite_rules();
}

//Banner
add_action('init', 'banner_register');
 
function banner_register() {
 
	$labels = array(
		'name' => _x('Banner', 'post type general name'),
		'singular_name' => _x('Banner', 'post type singular name'),
		'add_new' => _x('Adicionar', 'portfolio item'),
		'add_new_item' => __('Adicionar'),
		'edit_item' => __('Editar'),
		'new_item' => __('Adicionar'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Procurar'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada na lixeira'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/post-parceiros.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','thumbnail')
	  ); 
 
	register_post_type( 'banner' , $args );
	flush_rewrite_rules();
}

//Produtos
add_action('init', 'produtos_register');
 
function produtos_register() {
 
	$labels = array(
		'name' => _x('Produtos', 'post type general name'),
		'singular_name' => _x('Produto', 'post type singular name'),
		'add_new' => _x('Adicionar', 'portfolio item'),
		'add_new_item' => __('Adicionar'),
		'edit_item' => __('Editar'),
		'new_item' => __('Adicionar'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Procurar'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada na lixeira'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/post-parceiros.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor')
	  ); 
 
	register_post_type( 'produtos' , $args );
	flush_rewrite_rules();
}

//Newsletters
add_action('init', 'news_register');
 
function news_register() {
 
	$labels = array(
		'name' => _x('Newsletters', 'post type general name'),
		'singular_name' => _x('Newsletter', 'post type singular name'),
		'add_new' => _x('Adicionar', 'portfolio item'),
		'add_new_item' => __('Adicionar'),
		'edit_item' => __('Editar'),
		'new_item' => __('Adicionar'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Procurar'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada na lixeira'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/post-parceiros.png',
		'rewrite' => array( 'slug' => 'newsletter' ),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','thumbnail')
	  ); 
 
	register_post_type( 'news' , $args );
	flush_rewrite_rules();
}

//Contatos
add_action('init', 'contatos_register');
 
function contatos_register() {
 
	$labels = array(
		'name' => _x('Contatos', 'post type general name'),
		'singular_name' => _x('Contatos', 'post type singular name'),
		'add_new' => _x('Adicionar', 'portfolio item'),
		'add_new_item' => __('Adicionar'),
		'edit_item' => __('Editar'),
		'new_item' => __('Adicionar'),
		'view_item' => __('Visualizar'),
		'search_items' => __('Procurar'),
		'not_found' =>  __('Nada encontrado'),
		'not_found_in_trash' => __('Nada na lixeira'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/img/post-parceiros.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 
 
	register_post_type( 'contatos-regiao' , $args );
	flush_rewrite_rules();
}


/*
* Metabox
*/
add_action("admin_init", "admin_init");

function admin_init(){
  add_meta_box("link_grupo", "Link", "link_grupo_fluxo", "grupo-fluxo", "side", "low");
  add_meta_box("link_banner", "Link", "link_banner", "banner", "normal", "low");
  add_meta_box("info_post", "Informações sobre o texto", "info_post", "post", "normal", "low");
  add_meta_box("news", "Informações sobre a news", "info_news", "news", "normal", "low");
  add_meta_box("edicao_newsletter", "Edição do Newsletter", "edicao_newsletter", "news", "side", "low");
  add_meta_box("produtos", "Equipamento e Representada", "lista_equipamentos_produtos", "produtos", "side", "low");

}

/* Grupo */
function link_grupo_fluxo() {
  global $post;
  $custom = get_post_custom($post->ID);
  $link_grupo = $custom["link_grupo"][0];
  ?>
  <p><input name="link_grupo" value="<?php echo $link_grupo; ?>" /></p>
  <?php
}

/* Banner */
function link_banner() {
  global $post;
  $custom = get_post_custom($post->ID);
  $link_banner = $custom["link_banner"][0];
  ?>
  <p>
  	<input name="link_banner" value="<?php echo $link_banner; ?>" size="122" />
  	<input id="upload_image_button2" type="button" value="Upload SWF" />
  </p>
  <script>
	jQuery(document).ready(function() {
	
		jQuery('#upload_image_button2').click(function() {
			formfield = jQuery('#link_banner').attr('name');
			tb_show('', 'media-upload.php?post_id=<?php echo $post->ID; ?>&amp;type=image&amp;TB_iframe=true');
			return false;
		});
		
		window.send_to_editor = function(html) {
			imgurl = jQuery('img',html).attr('src');
			jQuery('#link_banner').val(imgurl);
			tb_remove();
		}
	
	});

	</script>
  
  <?php
  
}

/* Produtos */
function lista_equipamentos_produtos() {
  global $post;
  global $wpdb;
  $custom = get_post_custom($post->ID);
  $equipamento_produto = $custom["equipamento_produto"][0];
  $representadas_produto = $custom["representadas_produto"][0];
  ?>
	<select name="equipamento_produto">
		<option value="">Escolha um Equipamento</option>
		<?php
		$fivesdrafts = $wpdb->get_results( 
		
			"
			SELECT ID, post_title 
			FROM wp_fo_posts
			WHERE post_type = 'equipamento' 
			"
		);
		
		foreach ( $fivesdrafts as $fivesdraft ) 
		{
		?>
			<option value="<?php echo $fivesdraft->ID; ?>" <?php if( $fivesdraft->ID == $equipamento_produto ) echo 'selected="selected"'; ?>><?php echo $fivesdraft->post_title; ?></option>
		<?php
		}

		?>

	</select>

	<select name="representadas_produto">
		<option value="">Escolha uma Representada</option>
		<?php
		$fivesdrafts2 = $wpdb->get_results( 
			"
			SELECT ID, post_title 
			FROM wp_fo_posts
			WHERE post_type = 'representacoes' 
			"
		);
		
		foreach ( $fivesdrafts2 as $fivesdraft2 ) 
		{
		?>
			<option value="<?php echo $fivesdraft2->ID; ?>" <?php if( $fivesdraft2->ID == $representadas_produto ) echo 'selected="selected"'; ?>><?php echo $fivesdraft2->post_title; ?></option>
		<?php
		}

		?>

	</select>
	<?php
}
/* Posts */
function info_post() {
	global $post;
	$custom = get_post_custom($post->ID);
	$autor_noticia = $custom["autor_noticia"][0];
	$fonte_noticia = $custom["fonte_noticia"][0];
	$link_fonte_noticia = $custom["link_fonte_noticia"][0];
	?>
	
    <p><label>Autor:</label><br />
	<input name="autor_noticia" value="<?php echo $autor_noticia; ?>" size="122" /></p>
    
	<p><label>Fonte:</label><br />
	<input name="fonte_noticia" value="<?php echo $fonte_noticia; ?>" size="122" /></p>
	
    <p><label>Link da fonte(deixar em branco caso nao exista):</label><br />
	<input name="link_fonte_noticia" value="<?php echo $link_fonte_noticia; ?>" size="122" /></p>
	
	<?php
}

function edicao_newsletter() {
	global $post;
	$custom = get_post_custom($post->ID);
	$edicao_newsletter = $custom["edicao_newsletter"][0];

	?>
	
    <p><label>Edição:</label><br />
	<input name="edicao_newsletter" value="<?php echo $edicao_newsletter; ?>" size="30" /></p>

	
	<?php
}

/* News */
function info_news() {
	global $post;
	$custom = get_post_custom($post->ID);
	$capa = $custom["capa"][0];
	$upload_pdf = $custom["upload_pdf"][0];
	?>
	
    <p><label>Capa:</label><br />
	<input name="capa" value="<?php echo $capa; ?>" size="122" /></p>
	
	<tr valign="top">
	<th scope="row">PDF<br /></th>
		<td>
			<label for="upload_image">
			<input id="upload_image" type="text" size="36" name="upload_pdf" value="<?php echo $upload_pdf; ?>" />
			<input id="upload_image_button" type="button" value="Upload PDF" />
			<br />Clicar em inserir no post.
			</label>
		</td>
	</tr>

	<script>
	jQuery(document).ready(function() {
	
		jQuery('#upload_image_button').click(function() {
			formfield = jQuery('#upload_image').attr('name');
			tb_show('', 'media-upload.php?post_id=<?php echo $post->ID; ?>&amp;type=image&amp;TB_iframe=true');
			return false;
		});
		
		window.send_to_editor = function(html) {
			imgurl = jQuery('img',html).attr('src');
			jQuery('#upload_image').val(imgurl);
			tb_remove();
		}
	
	});

	</script>
	
	<?php
}

add_action('save_post', 'save_details');

function save_details(){
  global $post;
 
  update_post_meta($post->ID, "link_grupo", $_POST["link_grupo"]);
  update_post_meta($post->ID, "link_banner", $_POST["link_banner"]);
  update_post_meta($post->ID, "autor_noticia", $_POST["autor_noticia"]);
  update_post_meta($post->ID, "fonte_noticia", $_POST["fonte_noticia"]);
  update_post_meta($post->ID, "link_fonte_noticia", $_POST["link_fonte_noticia"]);
  update_post_meta($post->ID, "capa", $_POST["capa"]);
  update_post_meta($post->ID, "upload_pdf", $_POST["upload_pdf"]);
  update_post_meta($post->ID, "equipamento_produto", $_POST["equipamento_produto"]);
  update_post_meta($post->ID, "representadas_produto", $_POST["representadas_produto"]);
  update_post_meta($post->ID, "edicao_newsletter", $_POST["edicao_newsletter"]);
  
}


//Desabilitanto o auto-save
function disable_autosave() {
    wp_deregister_script('autosave');
}
add_action( 'wp_print_scripts', 'disable_autosave' );

//Diminnuindo o excerpt
function new_excerpt_length($length) {
	return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');

//Upload
function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', WP_PLUGIN_URL.'/my-script.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
}

function my_admin_styles() {
	wp_enqueue_style('thickbox');
}

add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');


add_theme_support( 'menus' );
if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'menu_principal', 'Este é meu primeiro menu' );
    register_nav_menu( 'menu_rodape', 'Este é meu segundo menu' );
    register_nav_menu( 'menu_ingles', 'Este é meu segundo menu' );
    register_nav_menu( 'menu_rodape_ingles', 'Este é meu segundo menu' );
}


function demo($mimes) {
	if ( function_exists( 'current_user_can' ) )
		$unfiltered = $user ? user_can( $user, 'unfiltered_html' ) : current_user_can( 'unfiltered_html' );
	if ( !empty( $unfiltered ) ) {
		$mimes = array(
				'swf' => 'application/x-shockwave-flash',
				'exe' => 'application/x-msdownload',
                'jpg' => 'image/jpeg',
                'jpeg' => 'image/pjpeg',
                'jpg' => 'image/pjpeg',
                'gif' => 'image/gif',
                'png' => 'image/png',
                'pdf' => 'application/pdf'
		);
	}
	return $mimes;
}
add_filter('upload_mimes','demo');

?>