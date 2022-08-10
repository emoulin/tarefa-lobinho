<?php
//Template Name:Pagina quem somos
?>

<?php get_header(); ?>
    <main>
        <div class="aboutPage">
            <h2 class="aboutTitle"> <?php the_title(); ?></h2>
            <p class="aboutTxtSomos"><?php the_content(); ?></p>
        </div>
    </main>
    <hr class="footerDivsor">
    
<?php get_footer(); ?>