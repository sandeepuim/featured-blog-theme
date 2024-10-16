<?php
get_header(); ?>

<div class="container my-5">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h1 class="mb-4"><?php the_title(); ?></h1>
                <div class="post-meta mb-3">
                    <p>Posted on <?php the_time( get_option( 'date_format' ) ); ?> by <?php the_author(); ?></p>
                </div>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail mb-4">
                        <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded shadow' ) ); ?>
                    </div>
                <?php endif; ?>

                <div class="post-content mb-4">
                    <?php the_content(); ?>
                </div>

                <div class="post-categories">
                    <p>Categories: <?php the_category( ', ' ); ?></p>
                </div>

                <div class="post-tags">
                    <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                </div>

                <div class="post-author mb-4">
                    <h4>About the Author</h4>
                    <p><?php echo get_the_author_meta( 'description' ); ?></p>
                </div>

                <div class="comments-section">
                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif; ?>
                </div>
            </article>
        <?php endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif; ?>
</div>

<?php get_footer(); ?>
