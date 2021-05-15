<section class="info-wrap info-wrap-def info-feature"><img class="info-feature-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/feature-img/features-img-bg.svg" alt=""><img class="info-feature-abstr-1" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-abstr-1.png" alt=""><img class="info-feature-abstr-2" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-abstr-2.png" alt="">
    <div class="info-wrap-img-elem"><img class="info-wrap-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/block-img-2.png" alt=""></div>
    <div class="info-wrap-elem-content">
        <?php
            $posts = get_posts( array(
                'post_type' => 'features',
            ) );

            foreach( $posts as $post ) {
                setup_postdata($post);
                ?>

                <div class="fino-wrap-t">
                    <div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/features-icon.svg" alt=""></div>
                    <div class="info-wrap-desc big"><?= the_field('label') ?></div>
                </div>
                <div class="info-wrap-b">
                    <div class="accordion">
                        <div class="accordion-elem active">
                            <div class="accordion-heading"><?= the_field('title_1') ?></div>
                            <div class="accordion-dropdown">
                                <ul class="custom-list dark">
                                    <?= the_field('text_1') ?>
                                </ul><a class="read-more read-more-list" href="<?= the_field('link_url_1') ?>"><?= the_field('link_text_1') ?></a>
                            </div>
                        </div>
                        <div class="accordion-elem">
                            <div class="accordion-heading"><?= the_field('title_2') ?></div>
                            <div class="accordion-dropdown">
                                <ul class="custom-list dark">
                                    <?= the_field('text_1') ?>
                                </ul><a class="read-more read-more-list" href="<?= the_field('link_url_2') ?>"><?= the_field('link_text_2') ?></a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }

            wp_reset_postdata();
        ?>
    </div>
</section>