<?php
/*
Template Name: Full Width Template
Template Post Type: post, page
*/

get_header();

// Inclua aqui o código específico do seu conteúdo ou use as funções do Elementor
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // O Loop WordPress
        while (have_posts()) :
            the_post();

            // Exibe o conteúdo da postagem
            the_content();

        endwhile; // Fim do loop
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();