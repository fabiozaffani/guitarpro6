<?php get_header(); ?>

    <div id="container">
        <?php the_post(); ?>
        <div class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </div><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Páginas:' ) . '</span>', 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->

    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>