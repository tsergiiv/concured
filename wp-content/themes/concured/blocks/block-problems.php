<section class="info-slider info-problem"><img class="info-slider-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-bg.svg" alt="">
    <div class="info-slider-wrap">
        <div class="info-slider-l">
            <div class="info-slider-text">
                <?php
                    $posts = get_posts( array(
                        'post_type' => 'problems',
                    ) );

                    foreach( $posts as $post ) {
                        setup_postdata($post);
                        ?>

                        <div class="info-slider-text-elem">
                            <div class="info-wrap-t">
                                <div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/features-icon.svg" alt=""></div>
                                <div class="info-wrap-desc sm"><?= the_field('label') ?></div>
                                <div class="info-wrap-heading sm"><?= the_field('title') ?></div>
                            </div>
                            <div class="info-wrap-b">
                                <ul class="custom-list">
                                    <?= the_field('text') ?>
                                </ul>
                            </div>
                        </div>

                        <?php
                    }

                    wp_reset_postdata();
                ?>
            </div>
            <div class="slider-button-wrap info-slider-footer">
                <button class="slider-button slider-button-prev problem-prev">
                    <svg class="slider-button-icon">
                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-l"></use>
                    </svg>
                </button>
                <button class="slider-button slider-button-next problem-next">
                    <svg class="slider-button-icon">
                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-r"></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="info-slider-r">
            <div class="info-slider-img-wrap">
                <div class="info-slider-img-elem"><img class="info-slider-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-1.png" alt="Problem image #1"></div>
                <div class="info-slider-img-elem"><img class="info-slider-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-f-2.png" alt="Problem image #2"></div>
                <div class="info-slider-img-elem"><img class="info-slider-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-f-3.png" alt="Problem image #3"></div>
            </div>
        </div>
    </div>
</section>