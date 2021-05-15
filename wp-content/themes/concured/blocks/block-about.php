<section class="info-wrap info-wrap-def info-wrap-about"><img class="info-wrap-bg info-wrap-bg-about" src="<?php bloginfo('template_url'); ?>/assets/img/content/about/about-bg.svg" alt="">
    <div class="info-wrap-img-elem">
        <picture class="info-wrap-img">
            <source media="(max-width: 480px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/about-concured-320.png">
            <source media="(max-width: 991px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/about-concured-768.png"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/about-concured-2.png" alt="">
        </picture>
    </div>
    <div class="info-wrap-elem-content">
        <?php
            $posts = get_posts( array(
                'post_type' => 'about',
            ) );

            foreach( $posts as $post ) {
                setup_postdata($post);
                ?>

                <div class="fino-wrap-t">
                    <div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/search-icon.svg" alt=""></div>
                    <div class="info-wrap-desc sm"><?= the_field('label') ?></div>
                    <div class="info-wrap-heading big"><?= the_field('title') ?></div>
                </div>
                <div class="info-wrap-b">
                    <ul class="custom-list">
                        <?= the_field('text') ?>
                    </ul><a class="read-more read-more-list" href="<?= the_field('link_url') ?>"><?= the_field('link_text') ?></a>
                </div>

                <?php
            }

            wp_reset_postdata();
        ?>
    </div>
</section>