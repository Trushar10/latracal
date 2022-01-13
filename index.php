<?php get_header(); ?>

<main>
    <section class="posts">
        <h1 class="my-3">All Posts</h1>
        <?php

        $args = array(   
            'posts_per_page'    => 100,                                        
        );
        $the_query = new WP_Query( $args );
        
        if ( $the_query->have_posts() ) {
            
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('template-parts/posts/content');
            }
            
        }
        /* Restore original Post Data */
        wp_reset_postdata();

    ?>
    </section>
</main>

<?php get_footer(); ?>