<?php get_header(); ?>

    <div id="container">
        <?php if( have_posts() ) : while( have_posts() ) :
                the_post();
        ?>
            <div class="post">

                <h1><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                <?php the_excerpt(); ?>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>