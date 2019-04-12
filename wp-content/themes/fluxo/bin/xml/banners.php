<?php
 
// Ligação à Base de Dados
require_once( '../../../wp-config.php' );
 
// Inicia variável que gaurdará todos os dados
$xml_output = "";
 
// ---------------------------------------------------------------------------------
// QUERY POSTS
 
// Queremos apenas artigos da categoria com o ID de 1
$query = 'cat=1';
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
 
        // Agrega dados à variável em formato xml
        $xml_output .= "\n\t<artigo>";
        $xml_output .= "\n\t\t<titulo>" . get_the_title() . "</titulo>";
        $xml_output .= "\n\t</artigo>";
    }
}
 
// ---------------------------------------------------------------------------------
// OUTPUT dos dados numa estrutura xml
 
$xml = "<xml version='1.0' encoding='UTF-8'>";
$xml .= "\n<artigos>\n";
$xml .= $xml_output;
$xml .= "\n</artigos>";
$xml .= "\n</xml>";
 
echo $xml;
 
?>