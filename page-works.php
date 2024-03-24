<?php get_header(); ?>
<div class="works-container">
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1
        );
        
        $query = new WP_Query($args);
        
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <a href="<?php the_permalink(); ?>" class="item-wrapper">
                    <div class="title"><?php echo the_title(); ?></div>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                    <div class="category-wrapper">
                        <?php
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                foreach ( $categories as $category ) {
                                    echo '<span class="category-label '.$category->slug.'">' . esc_html( $category->name ) . '</span>';
                                }
                            }
                        ?>
                    </div>
                </a>
                <?php
            }
        } else {
            echo "글이 없습니다.";
        }
        wp_reset_postdata();
    ?>
</div>
<?php get_footer(); ?>
