<section class="comment container">
    <h1 class="comment-heading">Client Testimonials</h1>
    <div class="comment-wrap">
        <?php
        $posts = get_posts( array(
            'post_type' => 'testimonial',
        ) );

        foreach( $posts as $post ) {
            setup_postdata($post);
            ?>

            <div class="comment-elem">
                <div class="comment-company"><?= the_field('title') ?></div>
                <p class="comment-text"><?= the_field('text') ?></p>
                <div class="comment-person"> <img class="comment-person-photo" src="<?= the_field('avatar') ?>" alt="">
                    <div class="comment-person-info">
                        <div class="comment-person-name"><?= the_field('full_name') ?></div>
                        <div class="comment-person-position"><?= the_field('position') ?></div>
                    </div>
                </div><a class="read-more comment-read-more" href="<?= the_field('link') ?>">Read case study </a>
            </div>

            <?php
        }

        wp_reset_postdata();
        ?>
    </div>
</section>