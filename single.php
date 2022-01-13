<?php

get_header( ); 

?>

<main>
    <section>
        <h1><?php the_title(); ?></h1>
        <?php echo get_the_post_thumbnail($post_id, 'full', array('class' => 'mb-1')); ?>
        <?php the_content(); ?>
    </section>
</main>

<?php get_footer( ); ?>