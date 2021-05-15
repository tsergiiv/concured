<section class="demo"><img class="demo-bg-t" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/gradient.png" alt=""><img class="demo-bg-b" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/gradient.png" alt="">
    <div class="demo-wrap">
        <div class="demo-info">
            <?php
                $posts = get_posts( array(
                    'post_type' => 'demo',
                ) );

                foreach( $posts as $post ) {
                    setup_postdata($post);
                    ?>

                    <div class="demo-desc"><?= the_field('label') ?></div>
                    <h1 class="demo-heading"><?= the_field('title') ?></h1>
                    <p class="demo-text"><?= the_field('text') ?></p>
                    <button class="btn-s btn-blue modal-o-btn demo-btn" data-modal-btn="book-modal"><?= the_field('button_text') ?></button>

                    <?php
                }

                wp_reset_postdata();
            ?>
        </div>
        <div class="demo-img-wrap">
            <picture class="demo-img">
                <source media="(max-width: 991px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/demo/demo-img-768.png"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/demo/demo-img.png" alt="">
            </picture>
        </div>
    </div>
</section>