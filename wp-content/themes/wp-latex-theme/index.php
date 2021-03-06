<?php get_header(); ?>
    <div class="columns">
        <div class="main-column">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post-teaser">
                <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                <?php the_content( __( 'weiterlesen <span class="meta-nav">&rarr;</span>', 'wp-latex-theme' ) ); ?>
                <?php wp_link_pages(); ?>
                <?php edit_post_link(); ?>
            </div>

            <?php
                endwhile;
            ?>
            <div class="pagenav">
                <div id="pageback">
                    <?php
                        if ( get_previous_posts_link() ) {
                            previous_posts_link();
                        }
                    ?>
                </div>
                <div id="pageforward">
                    <?php
                        if ( get_next_posts_link() ) {
                            next_posts_link();
                        }
                    ?>
                </div>
            </div>
            <div class="floatclear"></div>
            <?php else: ?>

            <p>No posts found. :(</p>

            <?php endif; ?>
        </div>
        <div class="side-column">
            <?php
                get_sidebar();
            ?>
        </div>
    </div>
    <div class="floatclear"></div>
    <?php
        wp_footer();
        get_footer()
    ?>