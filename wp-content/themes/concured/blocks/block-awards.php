<section class="big-slider awards">
    <div class="big-slider-content">
        <div class="big-slider-bg-wrap">
            <div class="big-slider-bg"></div>
        </div>
        <div class="big-slider-top">
	        <?php
	        $posts = get_posts( array(
			        'post_type' => 'titles',
	        ) );

	        foreach( $posts as $post ) {
		        setup_postdata($post);
		        ?>

		        <div class="big-slider-desc"><?= the_field('awards_label') ?></div>
		        <h1 class="big-slider-heading"><?= the_field('awards_title') ?></h1>

		        <?php
	        }

	        wp_reset_postdata();
	        ?>

        </div>
        <div class="big-slider-wrap awards-slider">
            <?php
                $posts = get_posts( array(
                    'post_type' => 'awards',
                ) );

                foreach( $posts as $post ) {
                    setup_postdata($post);
                    ?>

                    <div class="big-slider-elem"><img class="awards-slider-img" src="<?= the_field('image') ?>" alt=""></div>

                    <?php
                }

                wp_reset_postdata();
            ?>
        </div>
        <div class="slider-button-wrap big-slider-btn">
            <button class="slider-button slider-button-prev inv big-slider-prev">
                <svg class="slider-button-icon">
                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-l"></use>
                </svg>
            </button>
            <button class="slider-button slider-button-next inv big-slider-next">
                <svg class="slider-button-icon">
                    <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-r"></use>
                </svg>
            </button>
        </div>
    </div>
</section>