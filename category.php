<?php get_header(); ?>

<main>
    <section class="cat">
        <h1>Category: <?php single_cat_title(); ?></h1>
        <div>

            <?php 
                // Check if there are any posts to display
                if ( have_posts() ) : 
            ?>

            <?php
 
            // The Loop
            while ( have_posts() ) : the_post(); ?>
            <?php
            get_template_part('template-parts/posts/content');
            ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    </div>
    </section>
</main>

<?php get_footer(); ?>