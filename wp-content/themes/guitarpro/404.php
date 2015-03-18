<?php get_header(); ?>

    <div id="main">
        <?php if( have_posts() ) : while( have_posts() ) :
                the_post();
        ?>
            <div class="post">

                <h1>Ooops, nada encontrado</h1>
                
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>