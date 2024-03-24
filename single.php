<?php get_header(); ?>
<div class="contents-container">
    <div class="information">
        <div class="sticky">
                <?php 
                    $categories = get_the_category();
                    $category_output = '';
                    if ( ! empty( $categories ) ) {
                        foreach ( $categories as $category ) {
                            $category_output .= '<span class="category-label '.$category->slug.'">' . esc_html( $category->name ) . '</span>';
                        }
                    }
                    $title = get_the_title();
                    $year = get_field('year');
                    ?>
                <div class="title-year">
                    <h2 class="title"><?= $title ?></h2>
                    <span class="year"><?= $year ?></span>

                </div>
                <div class="category-wrapper"><?= $category_output ?></div>
        </div>
    </div>
    <div class="gallery">
        <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('large');
            }
            $gallery = get_field('gallery');
            foreach($gallery as $image){
                $image_id = $image['ID'];
                $large_image = wp_get_attachment_image($image_id, 'large');
                $image_url = wp_get_attachment_url($image_id);
                
                echo '<a href="' . $image_url . '" class="image" data-fancybox="gallery">' .$large_image . '</a>';
            }
        ?>
    </div>
    <div class="contents">
        <div class="sticky">
            <?php 
                $categories = get_the_category();
                $category_output = '';
                if ( ! empty( $categories ) ) {
                    foreach ( $categories as $category ) {
                        $category_output .= '<span class="category-label '.$category->slug.'">' . esc_html( $category->name ) . '</span>';
                    }
                }
                $title = get_the_title();
                $year = get_field('year');
                $contents = get_field('contents');
                $link = get_field('link');
                $link_output = $link ? '<a class="link" href="'.$link.'" target="_blank">'.$link.'<svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 10L10 1" stroke="white"/>
                <path d="M4 1H10V7" stroke="white"/>
                </svg>
                '.'</a>' : '';
                ?>
            <div class="title-year">
                <h2 class="title"><?= $title ?></h2>
                <span class="year"><?= $year ?></span>

            </div>
            <div class="category-wrapper"><?= $category_output ?></div>
            <div class="contents"><?= $contents ?></div>
            <?= $link_output?>
        </div>
    </div>
</div>
<p>
    <?php the_content(); ?>
</p>
<?php get_footer();?>