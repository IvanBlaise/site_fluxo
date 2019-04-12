<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/menu.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/fonts.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/nivo-slider.css" />
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- CSS -->
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/> <!--JQuery UI-->
<!-- /CSS -->
<!-- JS -->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script> <!-- Biblioteca de JS -->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/swfobject.js"></script> <!-- Biblioteca de JS -->
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> <!--JQuery UI-->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.nivo.slider.js"></script> <!-- Slider Home -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.stylish-select.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/customSelect.jquery.js" type="text/javascript"></script>

<!-- Modernizr -->
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/modernizr.js"></script>

<!-- Validação -->
<link href="<?php bloginfo("template_url"); ?>/validate.css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.validationEngine.js"> </script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.validationEngine-pt.js"> </script>

<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/fluxo.js"> </script>
<!-- /JS -->

<!--[if IE 9 ]>
<link href="<?php bloginfo("template_url"); ?>/css/ie.css" type="text/css" rel="stylesheet" />
<![endif]-->
<?php wp_head(); ?>
</head>

<body>
<!-- #fluxo - Div principal -->
<div id="fluxo">
	<!-- .cont-esquerda - Barra da Direita -->
    <div class="cont-esquerda">
        <?php include ('incs/sidebar-interna.php');?>
        
    </div>
	<!-- .cont-esquerda -->
    
    <?php if($_SESSION['idioma'] == 'pt_br') { ?> 
        <!-- .cont-direita - Barra da Esquerda -->
        <div class="cont-direita">
            <!-- .barra-amarela - Título + trabalhe conosco + webmail -->
            <div class="barra-amarela">
                <h1>FLUXO SOLUÇÕES INTEGRADAS</h1>
                <!-- <a href="trabalhe-conosco" class="trabalhe-conosco" >&lt;&lt;Trabalhe Conosco</a> -->
                <!-- <a href="http://177.19.222.18:8087/" target="_blank" class="webmail">Intranet &gt;&gt;</a> -->
                  <a href="http://webmail.fluxosolutions.com.br/horde3/" target="_blank" class="webmail">WEBMAIL &gt;&gt;</a>
            
            </div>
            <!-- /.barra-amarela -->
            <div class="clear"></div>
            <!-- .subBarra - Linguagem - Contato + Arquivos NewsLetter + Intranet -->
            <div class="subBarra">
            	<!-- .linguagem -->
                <div class="linguagem">
                	<a href="<?php bloginfo("url"); ?>/idioma.php?url=<?php bloginfo("url"); ?><?php echo $_SERVER['REQUEST_URI']; ?>/pt_br">
                        <img src="<?php bloginfo("template_url"); ?>/imgs/bandeira_portugues.png" alt="Português" title="Português">
                    </a>
                    <a href="<?php bloginfo("url"); ?>/idioma.php?url=<?php bloginfo("url"); ?><?php echo $_SERVER['REQUEST_URI']; ?>/en_us">
                        <img src="<?php bloginfo("template_url"); ?>/imgs/bandeira_ingles.png" alt="Inglês" title="Inglês">
                    </a>
                </div>
            	<!-- /.linguagem -->
                <div class="outros">
                	<a href="<?php bloginfo("url"); ?>/contatos">Contatos |</a>
                    <a href="<?php bloginfo("url"); ?>/arquivos-newsletters">Arquivos Newsletters |</a>
                    <a href="<?php bloginfo("url"); ?>/galeria">Galeria |</a>
                    <a href="<?php bloginfo("url"); ?>/canal-da-qualidade">Canal de Comunicação</a>
                    <!-- <a href="<?php bloginfo("url")?>/cotacao" class="semMP">Cotação</a> -->
                </div>
                
            </div>
            <!-- /.subBarra -->
        <?php } else { ?>
            
            <!-- .cont-direita - Barra da Esquerda -->
        <div class="cont-direita">
            <!-- .barra-amarela - Título + trabalhe conosco + webmail -->
            <div class="barra-amarela">
                <h1>FLUXO INTEGRATED SOLUTIONS</h1>
                <a href="trabalhe-conosco" class="trabalhe-conosco" >&lt;&lt;Trabalhe Conosco</a>
               <a href="http://webmail.fluxosolutions.com.br/horde3/" target="_blank" class="webmail">WEBMAIL &gt;&gt;</a>
            
            </div>
            <!-- /.barra-amarela -->
            <div class="clear"></div>
            <!-- .subBarra - Linguagem - Contato + Arquivos NewsLetter + Intranet -->
            <div class="subBarra">
                <!-- .linguagem -->
                <div class="linguagem">
                    <a href="<?php bloginfo("url"); ?>/idioma.php?url=<?php bloginfo("url"); ?><?php echo $_SERVER['REQUEST_URI']; ?>/pt_br">
                        <img src="<?php bloginfo("template_url"); ?>/imgs/bandeira_portugues.png" alt="Português" title="Português">
                    </a>
                    <a href="<?php bloginfo("url"); ?>/idioma.php?url=<?php bloginfo("url"); ?><?php echo $_SERVER['REQUEST_URI']; ?>/en_us">
                        <img src="<?php bloginfo("template_url"); ?>/imgs/bandeira_ingles.png" alt="Inglês" title="Inglês">
                    </a>
                </div>
                <!-- /.linguagem -->
                <div class="outros">
                    <a href="<?php bloginfo("url"); ?>/contatos">Contacts |</a>
                    <a href="<?php bloginfo("url"); ?>/arquivos-newsletters">Newsletter Library |</a>
                    <a href="<?php bloginfo("url"); ?>/galeria">Pictures Folder </a>
                    <!-- <a href="<?php bloginfo("url")?>/cotacao" class="semMP">Cotação</a> -->
                </div>
                
            </div>
            <!-- /.subBarra -->
            

        <?php } ?>


        <div class="clear"></div>
        <!-- .menu - Menu Dropdown -->
        <div class="menu">
        	<?php include ('incs/menu.php');?>
        </div>
        <!-- /.menu -->