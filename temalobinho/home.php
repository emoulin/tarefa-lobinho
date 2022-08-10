<?php
//Template Name:página dos lobinhos
?>

<?php get_header(); ?>
    <main>
        <div class="search">
            <div class="searchBar">
                <input class="searchInpt" type="text" name="Pesquisa">
                <button class="plusLobo" type="button">+ Lobo</button>
            </div>
            <div class="checkboxInfo">
                <input type="checkbox" class="checkbox-Wolfs" name="Lobos">
                <label for="Lobos">Ver lobinhos adotados</label>
              </div>
        </div>
        <!-- Tudo a partir daqui deve ser criado por API -->

        <div class="wolfsContainer">
            
           


            <div class="forAdoption">
                <div class="adoptionContainer">
                <?php
                //Define our Wp Query Parameters
                $the_query = new WP_Query(array("posts_per_page"=>4));
                ?>

                <?php $numero = 0 ?>

                    <?php
                    //start our WP Query
                    while ($the_query -> have_posts()): $the_query -> the_post();
                    //Display the post title with Hyperlink
                    ?>

                    <?php if($numero % 2 ==0) { ?>
                        
                    <div class="wolfAdoption">
                        <?php if( get_field('lobo_foto') ): ?>
                            <img class="wolfImg" src="<?php the_field('lobo_foto'); ?>" alt="Lobo Exemplo 1">
                        <?php endif; ?>
                        <div class="wolfAdoptionInfo">
                            <div class="wolfHeader">
                                <div class="titleButtonContainer">
                                    <h4 class="wolfTitle"><?php the_field('lobo_titulo'); ?></h4>
                                    <button class="btnWolf" type="button">Adotar</button>
                                </div>
                                <p class="wolfAge">Idade: <?php the_field('lobo_idade'); ?> anos</p>
                            </div>
                            <p class="wolfTxt"><?php the_field('lobo_descricao'); ?></p>   
                        </div>
                    </div>
                    <?php }
                    else { ?>

                    <div class="wolfAdoption">
                        <?php if( get_field('lobo_foto') ): ?>
                            <img class="wolfImg" src="<?php the_field('lobo_foto'); ?>" alt="Lobo Exemplo 1">
                        <?php endif; ?>
                        <div class="wolfAdoptionInfo">
                            <div class="wolfHeader">
                                <div class="titleButtonContainer">
                                    <h4 class="wolfTitle"><?php the_field('lobo_titulo'); ?></h4>
                                    <button class="btnWolf" type="button">Adotar</button>
                                </div>
                                <p class="wolfAge">Idade: <?php the_field('lobo_idade'); ?> anos</p>
                            </div>
                            <p class="wolfTxt"><?php the_field('lobo_descricao'); ?></p>   
                        </div>
                    </div> 
                    <?php }
                    $numero = $numero + 1; ?>
                    <?php
            //Repeat the process and reset once it hits the limit
            endwhile;
            wp_reset_postdata();
                    ?>

           
            
            <?php
                my_pagination();
            ?>


        </div> 
        

    </main>
    <hr class="footerDivsor">

<?php get_footer(); ?>