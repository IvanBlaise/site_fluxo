<?php
    /*
    * Template name: Search Page
    */
?>
<?php get_header('interna'); ?>
        
        <!--Conteudo com texto -->
        <div id="conteudo_texto">
            
            <!--Barra do topo -->
            <div id="barra_topo">
                
                <!--Breadcrumb e botoes de configuração -->
                <div class="configs">
                    
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb('<div id="breadcrumb">','</div>');
                        }
                    ?>
                    
                    <?php include("incs/botoes.php"); ?>
                    
                    <div class="clear"></div>
                    
                </div>
                <!-- / Breadcrumb e botoes de configuração -->
                
                <!--Titulo -->
                <div id="titulo">
                    
                      <?php if($_GET['post_type'] == 'todos'){ ?>
                    <h1>Busca</h1>
                    <?php
                        } else { 
                    ?>
                      <h1>Busca Newsletter</h1>
                    <?php 
                        }
                    ?>
                    <a href="#" class="voltar">voltar</a>
                    
                    <div class="clear"></div>
                    
                </div>
                <!--Titulo -->
                
            </div>
            <!-- / Barra do topo -->
            
            <?php if($_GET['post_type'] != 'todos'){ ?>
                <!--Texto com imagem -->
            <div id="grupo_fluxo">
                <div class="campo_busca_imagem">
                    <form action="<?php bloginfo("url"); ?>">
                        <label for="pesquisa">Pesquisa notícias:</label>
                        <input type="hidden" name="post_type" value="post" />
                        <input id="pesquisa" type="text" name="s" />
                        <input type="submit" class="buscabt" value="Ok" />
                    </form>
                </div>
            <!-- resultado busca imagem -->
                <?php
                    global $wp_query;
                    $total_results = $wp_query->found_posts;
                ?>

                <p class="resultado">Resultado da busca <span>"<?php echo $_GET["s"]; ?>": <?php echo $total_results; ?> matéria(s) encontrada(s)!</span></p>
                <?php
                    global $query_string;
                    
                    $query_args = explode("&", $query_string);
                    $search_query = array();
                    
                    foreach($query_args as $key => $string) {
                        $query_split = explode("=", $string);
                        $search_query[$query_split[0]] = urldecode($query_split[1]);
                    } // foreach
                    
                    $search_query["posts_per_page"] = "10";
                    
                    //print_r($search_query);
                    
                    $search = new WP_Query($search_query);
                ?>
                
                <?php if( $search->have_posts() ): while( $search->have_posts() ): $search->the_post(); ?>
                <div class="busca_simples">
                    <!-- Textos do resultado busca imagem -->
                    <div class="texto">
                    <p><?php the_title(); ?>   </p>
                        <a href="<?php the_permalink(); ?>">Ler matéria>></a>

                    </div>          
                </div>
                <?php endwhile; endif; ?>
                
                <?php wp_pagenavi() ?>
                
                <!-- /resultado busca imagem -->
            </div>
            <!-- / Texto com imagem -->
            <?php }else{?>
            
                <?php
                    global $wp_query;
                    $total_results = $wp_query->found_posts;
                ?>

                <p class="resultado">Resultado da busca <span>"<?php echo $_GET["s"]; ?>": <?php echo $total_results; ?> resultado(s) encontrada(s)!</span></p>
                <?php
                    $postTypes =array('post','page','representacoes','grupo-fluxo','solucoes_integradas','equipamento','news');
                    
                    //print_r($search_query);
    
                    $search = new WP_Query($query_string .'&posts_per_page=10');
                ?>
                
                <?php while( $search->have_posts() ): $search->the_post(); ?>
                <div class="busca_simples">
                    <!-- Textos do resultado busca imagem -->
                    <div class="texto">
                    <p><?php the_title(); ?>  </p>
                        <a href="<?php the_permalink(); ?>">Ler matéria>></a>

                    </div>          
                </div>
                <?php endwhile;  ?>
                
                <?php wp_pagenavi() ?>
            <?php }?>
            
            <div class="clear"></div>
            
<?php get_footer(); ?>