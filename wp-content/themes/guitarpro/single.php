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

        <div class="entry-meta">
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( __( ', ' ) );

                printf(
                    $utility_text,
                    $categories_list,
                    $tag_list,
                    esc_url( get_permalink() ),
                    the_title_attribute( 'echo=0' ),
                    get_the_author(),
                    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
                );
            ?>
            <?php edit_post_link( __( 'Editar'), '<span class="edit-link">', '</span>' ); ?>

            <?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
            <div id="author-info">
                <div id="author-avatar">
                    <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
                </div><!-- #author-avatar -->
                <div id="author-description">
                    <h2><?php printf( esc_attr__( 'Sobre %s' ), get_the_author() ); ?></h2>
                    <?php the_author_meta( 'description' ); ?>
                    <div id="author-link">
                        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                            <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>' ), get_the_author() ); ?>
                        </a>
                    </div><!-- #author-link	-->
                </div><!-- #author-description -->
            </div><!-- #entry-author-info -->
            <?php endif; ?>
        </div><!-- .entry-meta -->
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>