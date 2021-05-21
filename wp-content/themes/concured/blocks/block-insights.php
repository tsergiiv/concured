<section class="article-slider container"><img class="article-slider-bg-one" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-1.svg" alt=""><img class="article-slider-bg-two" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-2.svg" alt=""><img class="article-slider-bg-three" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-3.svg" alt="">
    <div class="article-slider-head">
        <?php
            $posts = get_posts( array(
                'post_type' => 'titles',
            ) );

            foreach( $posts as $post ) {
                setup_postdata($post);
                ?>

                <div class="info-wrap-desc sm"><?= the_field('insights_label') ?></div>
                <div class="article-slider-head-wrap">
                    <div class="info-wrap-heading big"><?= the_field('insights_title') ?></div>
                    <div class="slider-button-wrap article-slider-btn">
                        <button class="slider-button slider-button-prev article-prev">
                            <svg class="slider-button-icon">
                                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-l"></use>
                            </svg>
                        </button>
                        <button class="slider-button slider-button-next article-next">
                            <svg class="slider-button-icon">
                                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-r"></use>
                            </svg>
                        </button>
                    </div>
                </div>

                <?php
            }

            wp_reset_postdata();
        ?>
    </div>
    <div class="article-slider-wrap">
        <?php
            $posts = get_posts( array(
                'post_type'   => 'post',
                'numberposts' => 10,
	            'orderby'     => 'date',
	            'order'       => 'DESC',
            ) );

            foreach( $posts as $post ) {
                setup_postdata($post);
                get_template_part('blocks/block-post');
            }

            wp_reset_postdata();
        ?>
    </div>
    <div class="slider-button-wrap article-slider-btn article-slider-btn-mob">
        <button class="slider-button slider-button-prev article-prev">
            <svg class="slider-button-icon">
                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-l"></use>
            </svg>
        </button>
        <button class="slider-button slider-button-next article-next">
            <svg class="slider-button-icon">
                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-r"></use>
            </svg>
        </button>
    </div>
</section>