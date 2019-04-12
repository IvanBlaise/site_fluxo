 
        
   	</div>
    <!-- .cont-direita -->
	
    <div class="clear"></div>
    <!-- #rodape - Informações do rodape -->
   
    </div>
</div>
<!-- /#fluxo -->
</div>
<!-- /#fluxo -->
<!-- .rodapeExpansivel -->
<div class="rodapeExpansivel">
	<div class="center">
    	<a class="expandirMenu">
        	<img src="<?php bloginfo('template_url');?>/imgs/btExpandir.jpg" alt="Botão de Expandir o Menu" />
        </a>
    </div>
</div>
<!-- /.rodapeExpansivel -->
 <div id="menurodape">
    	<div class="center">
        	<!-- ul - listagem do menu -->
            <ul>
                
                  <?php if($_SESSION['idioma'] == 'pt_br') { ?> 
                    <?php wp_nav_menu(array('menu'=>'menu_rodape','theme_location'=>'menu_rodape')); ?> 
                
                  <?php } else {  ?>
                    <?php wp_nav_menu(array('menu'=>'menu_rodape_ingles','theme_location'=>'menu_rodape_ingles')); ?> 
                  
                  <?php } ?>

                
               
            </ul>     
            <!-- /ul -->
        </div>
    </div>
    <div id="rodape">
    	<div class="center">
        	<p>© Fluxo Soluções Integradas Ltda 2011. <a href="mailto:contato@fluxosolutions.com.br">salvador@fluxosolutions.com.br</a></p>
            <a href="#" class="manga"><img src="<?php bloginfo("template_url"); ?>/imgs/logo_manga_rosa.png" alt="Instituto Manga Rosa" /></a>
            <a href="http://www.pulsointerativo.com.br/" class="pulso"><img src="<?php bloginfo("template_url"); ?>/imgs/logo_pulso_hover.png" alt="Pulso Interativo" /></a>
        </div>
    </div>
    <!-- /#rodape -->
<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42820634-1', 'fluxosolutions.com.br');
  ga('send', 'pageview');

</script>


</body>
</html>