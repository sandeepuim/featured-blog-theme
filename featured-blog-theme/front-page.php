<?php
/**
 * Front Page Template
 */

get_header(); ?>

<div class="container my-5">
    <div class="row">
        <?php
        // Define the number of posts to display
        $args = array(
            'posts_per_page'        => 5,
            'post_status'           => 'publish',
            'ignore_sticky_posts'   => true,
        );

        $featured_query = new WP_Query( $args );

        if ( $featured_query->have_posts() ) :
            $post_count = 0;
            while ( $featured_query->have_posts() ) : $featured_query->the_post();
                $post_count++;
                if ( $post_count <= 3 ) : ?>
                    <!-- First Row: 3 Columns -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 featured-blog-item">
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
                <?php elseif ( $post_count == 4 ) : ?>
                    <!-- Second Row: First Column -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card h-100 featured-blog-item">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'large', array( 'class' => 'card-img-top' ) ); ?>
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
                <?php elseif ( $post_count == 5 ) : ?>
                    <!-- Second Row: Second Column Spanning -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card h-100 featured-blog-item">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'large', array( 'class' => 'card-img-top' ) ); ?>
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
                <?php endif;
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p class="text-center">No posts found.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
