<!--.logo - imagem flutuante -->
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

<?php $query_news = new WP_Query( array( "post_type" => "news", "order" => "DESC", "posts_per_page" => "1" ) ); ?>
<?php if( $query_news->have_posts() ): while( $query_news->have_posts() ): $query_news->the_post(); ?>
<!-- .newsletter - Newsletter -->
<div class="newsletter">
    <h3>
        <?php 
            if($_SESSION['idioma'] == 'pt_br') { 
                the_title();
            } else { 
                the_field('titulo_newsletter');
            }
        ?>
        

            
    </h3>
    <!-- .texto - Texto do box -->
    <div class="texto">
        <p>
            <a href="<?php $pdf = get_post_custom_values("upload_pdf"); echo $pdf[0];  ?>" target="_blank">
                 <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Download do arquivo em PDF." : "" );  ?>
            </a>
        <br />
        <br />
        <a href="<?php bloginfo('url')?>/cadastro-newsletter/">
                <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Cadastre-se aqui para receber informativos da fluxo e parceiros via correio." : "Register yourself to receive Fluxo's newsletter by e-mail" );  ?>

        </a></p>
        <!--p>Cadastre-se aqui para receber informativos da fluxo e parceiros via correio.</p-->
    </div>
    <!-- /.texto -->
    <!-- .imagem - Imagem do box -->
    
     <?php 
        if($_SESSION['idioma'] == 'pt_br') { 
    ?>
         <div class="img">
            <a href="<?php $pdf = get_post_custom_values("upload_pdf"); echo $pdf[0];  ?>" target="_blank">
            <?php 
            if(has_post_thumbnail()){
                the_post_thumbnail('newsletter');  
            } else {  ?> 
                <a href="<?php $pdf = get_post_custom_values("upload_pdf"); echo $pdf[0];  ?>" target="_blank"><img src="<?php bloginfo("'.template_url.'"); ?>/imgs/img_newsletter.jpg" alt="Imagem do Newsletter" /></a>
            <?php }?>            
            </a>
        </div>

    <?
        } else { 
    ?>
        
        <div class="img">
            
            <?php 
            if(has_post_thumbnail()){
                the_post_thumbnail('newsletter');  
            } else {  ?>    
                <img src="<?php bloginfo("'.template_url.'"); ?>/imgs/img_newsletter.jpg" alt="Imagem do Newsletter" />
            <?php }?>            
            </a>
        </div>


    <?
        }
    ?>


   

    <!-- /.imagem -->
</div>
<!-- /.newsletter -->
<?php endwhile;endif; ?>
<!-- 
    COMENTAR AQUI

.box de Responsabilidade Social 
<div class="box">
	<h3>responsabilidade social</h3>
    <a href="http://www.fazeracontecer.org.br">Instituto Fazer Acontecer</a>
    
    <img src="<?php bloginfo('template_url')?>/imgs/bannerResponsabilidade.jpg" alt="Banner responsabilidade Social" />
</div>
<!-- /.box de Responsabilidade Social -->
<!-- .eventos -->


<!-- .box de Empresa parceira -->
<div class="box">
	<h3>
        <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "CATTALINI 35 ANOS" : "CATTALINI 35 YEARS" );  ?>
        
        
    </h3>
    <a href="https://www.youtube.com/watch?v=Z6V_JxyYy0U" target="_blank"><?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Fluxo faz parte desta história. Destaque para Fusion4 da Honeywell a 1'56\"" : "Fluxo is part of this history. Look to Honeywell Fusion 4 on 1'56\")" );  ?></a>
    <a href="https://www.youtube.com/watch?v=Z6V_JxyYy0U" target="_blank"><img src="http://www.fluxosolutions.com.br/wp-content/uploads/2017/03/honeywll.jpg" /></a>
    
</div>
<!-- /.box de Empresa parceira-->
<div class="box">

    <h3>
        <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "PROJETO CUSTOMIZADO" : "CUSTOMIZED PROJECT" );  ?>
    </h3>
    <a href="<?php bloginfo( 'url' ) ?>/novidades/fluxo-e-rotork-fornecem-valvula-customizada-para-utgca">
         <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Fluxo e Rotork fornecem válvula customizada para UTGCA" : "Fluxo and Rotork supply customized valve to UTGCA" );  ?>
    </a>
	<a href="<?php bloginfo( 'url' ) ?>/novidades/fluxo-e-rotork-fornecem-valvula-customizada-para-utgca">
    <img src="http://www.fluxosolutions.com.br/wp-content/uploads/2017/03/rotork.jpg" />
	</a>
</div>
<!-- /.eventos -->
<!-- /.box de Empresa parceira-->
<div class="box">

    <h3>
        <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "CONTRATO COM A SBM" : "SBM CONTRACT" );  ?>
    </h3>
    <a href="<?php bloginfo( 'url' ) ?>/novidades/sbm-offshore-seleciona-fluxo-e-metroval-para-gestao-metrologica-de-plataformas-no-brasil">
         <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "SBM Offshore escolhe Fluxo e Metroval para gestão metrológica de plataformas no Brasil" : "Sbm Offshore selects Fluxo and Metroval for Metrological Management of their platforms on Brazil" );  ?>
    </a>
	<a href="<?php bloginfo( 'url' ) ?>/novidades/sbm-offshore-seleciona-fluxo-e-metroval-para-gestao-metrologica-de-plataformas-no-brasil">
    <img src="<?php bloginfo('template_url')?>/imgs/contrato-sbm.jpg" alt="Banner Contrato" />
	</a>
</div>
<!-- .box de galeira -->
<!--<div class="box">
	<h3>
        <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Galeria" : "PICTURES FOLDER" );  ?>
    </h3>
    <?php $quem_somos = new WP_Query("pagename=galeria");
    	if ($quem_somos->have_posts()) : while ($quem_somos->have_posts()) : $quem_somos->the_post(); ?> 
        	<a href="<?php the_permalink(); ?>">
                
                <?php echo ( $_SESSION['idioma'] == 'pt_br' ? "Obras que fazem parte do acervo da Fluxo Soluções Integradas." : "Artworks that belong to Fluxo’s collection" );  ?>       

            </a>
            <?php the_post_thumbnail(); ?>
            
    <?php endwhile;?>
            	
    <? endif;?>
</div>-->
<!-- /.box de Empresa parceira -->

