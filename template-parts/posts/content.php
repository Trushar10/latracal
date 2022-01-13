<div class="card">
    <?php the_post_thumbnail(); ?>
    <div class="post-desc">
        <h2><?php echo the_title(); ?></h2>
        <?php
            $categories = get_the_category();

            if ( ! empty( $categories ) ) {
            echo "<h4>".'<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>'."</h4>";
            }
        ?>
        <?php
            $post_tags = get_the_tags();
            if ( ! empty( $post_tags ) ) {               
            echo '<h4>';
                foreach( $post_tags as $post_tag ) {
                echo '<a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a>&nbsp;&nbsp;';
                }
                echo '</h4>';
            }
        ?>
        <p><?php echo get_the_excerpt(); ?></p>
        <a href="<?php echo get_permalink(); ?>">Read more</a>
    </div>
</div>