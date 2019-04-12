<?php
 session_start();
// Ligação à Base de Dados
require_once( '../../../wp-config.php' );
 
// Inicia variável que gaurdará todos os dados
$xml_output = "";
 
// ---------------------------------------------------------------------------------
// QUERY POSTS
 
// Queremos apenas artigos da categoria com o ID de 1
$query = 'post_type=banner';
$queryObject = new WP_Query($query);
 
// Verifica se existem artigos
if ($queryObject->have_posts())
{

    // Inicia loop
    while ($queryObject->have_posts())
    {
        // Objecto geral
        $queryObject->the_post();
 
        // Id do artigo
        $post_id = get_the_ID();
		
    
        if($_SESSION['idioma'] == 'pt_br') {
            // Agrega dados à variável em formato xml
    		$link = get_post_custom_values('link_banner'); 
            $xml_output .= "<url>" .  $link[0] . "</url>";
        } else {
            // Agrega dados à variável em formato xml
            $attachment_id = get_field('link_banner_ingles');
            $xml_output .= "<url>" .  $attachment_id . "</url>";
        }
		

    }

}
 
// ---------------------------------------------------------------------------------
// OUTPUT dos dados numa estrutura xml
 
$xml = "<?xml version='1.0' encoding='UTF-8'?>";
$xml .= "<raiz>";
$xml .= $xml_output;
$xml .= "</raiz>";

 
echo $xml;
 
?>