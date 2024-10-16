<?php
/**
 * Main Index File
 */

get_header(); ?>

<div class="container my-5">
    <h2 class="mb-4">Latest Posts</h2>
    <div class="row">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'medium', array( 'class' => 'card-img-top' ) ); ?>
                            </a>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title(); ?></a>
                            </h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile;

            // Pagination
            the_posts_pagination( array(
                'prev_text' => __( 'Previous', 'featured-blog-bootstrap-theme' ),
                'next_text' => __( 'Next', 'featured-blog-bootstrap-theme' ),
                'before_page_number' => '<span class="me-2">' . __( 'Page', 'featured-blog-bootstrap-theme' ) . '</span>',
            ) );
        else :
            echo '<p class="text-center">No posts found.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
