<?php get_header(); ?>

    <div id="container">
        <?php if( have_posts() ) : while( have_posts() ) :
                the_post();
        ?>
            <div class="post">

                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>