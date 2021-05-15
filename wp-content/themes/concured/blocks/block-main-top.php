<section class="main-page-head container">
    <div class="main-page-head-elem">
        <?php
            $posts = get_posts( array(
                'post_type' => 'main-top',
            ) );

            foreach( $posts as $post ) {
                setup_postdata($post);
                ?>

                <div class="main-page-head-heading"><?= the_field('title') ?></div>
                <div class="main-page-head-desc"><?= the_field('subtitle') ?></div>
                <button class="btn-s btn-coral main-page-head-btn modal-o-btn" data-modal-btn="book-modal"><?= the_field('button_text') ?></button>

                <?php
            }

            wp_reset_postdata();
        ?>
    </div>
    <div class="main-page-head-img-wrap"><img class="main-page-head-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/main-head-img.png" alt="Main page head image"></div>
</section>