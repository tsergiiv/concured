<?php get_header(); ?>

<main class="content">
    <div class="services-page">
        <section class="breadcrumbs-wrap container">
            <div class="breadcrumbs">
                <a class="breadcrumbs-link" href="<?= get_home_url(); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/concured-sl.svg" alt="">
                </a>
                <a class="breadcrumbs-link" href=""><?= the_title() ?></a>
            </div>
        </section>
        <section class="page-head container">
	        <?php
		        $posts = get_posts( array(
				        'post_type' => 'titles',
		        ) );

		        foreach( $posts as $post ) {
			        setup_postdata($post);
			        ?>

			        <h1 class="page-head-heading"><?= the_field('services_title') ?></h1>
			        <div class="page-head-desc"><?= the_field('services_text') ?></div>
			        <button class="btn-big btn-coral page-head-btn modal-o-btn" data-modal-btn="book-modal"><?= the_field('services_button') ?></button>

			        <?php
		        }

		        wp_reset_postdata();
	        ?>
        </section>
	    <?= get_template_part('blocks/block-clients') ?>
        <section class="container video">
            <video class="video-content" width="100" poster="<?php bloginfo('template_url'); ?>/assets/img/content/video/videoprev.png" muted="muted" playsinline>
                <source src="<?php bloginfo('template_url'); ?>/assets/img/content/video/video.mp4" type="video/mp4"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/video/videoprev.png" title="Your browser does not support the &lt;video&gt; tag">
            </video>
        </section>
        <div class="dark-bg-wrap services-problem">
	        <?php
		        $posts = get_posts( array(
				        'post_type' => 'problems',
		        ) );

	            $n = 1;
		        foreach( $posts as $post ) {
			        setup_postdata($post);
			        ?>

			        <?php if ($n == 1): ?>
				        <section class="info-wrap info-wrap-rev services-problem-elem-1"><img class="info-wrap-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-bg-1.png" alt="">
					        <div class="info-wrap-elem-content">
						        <div class="info-wrap-t">
							        <div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/features-icon.svg" alt=""></div>
							        <div class="info-wrap-desc sm"><?= the_field('label') ?></div>
							        <div class="info-wrap-heading sm"><?= the_field('title') ?></div>
						        </div>
						        <div class="info-wrap-b">
							        <ul class="custom-list dark">
								        <?= the_field('text') ?>
							        </ul>
						        </div>
					        </div>
					        <div class="info-wrap-img-elem">
						        <picture class="info-wrap-img">
							        <source media="(max-width: 480px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-f-1-320.png">
							        <source media="(max-width: 991px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-f-1-768.png"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-f-1.png" alt="">
						        </picture>
					        </div>
				        </section>
			        <?php endif; ?>

			        <?php if ($n == 2): ?>
				        <section class="info-wrap info-wrap-def services-problem-elem-2"><img class="info-wrap-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-bg-2.png" alt="">
					        <div class="info-wrap-img-elem">
						        <picture class="info-wrap-img">
							        <source media="(max-width: 480px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-f-2-320.png">
							        <source media="(max-width: 991px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-f-2-768.png"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-f-2.png" alt="">
						        </picture>
					        </div>
					        <div class="info-wrap-elem-content">
						        <div class="info-wrap-t">
							        <div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/monitor-icon.svg" alt=""></div>
							        <div class="info-wrap-desc sm"><?= the_field('label') ?></div>
							        <div class="info-wrap-heading sm"><?= the_field('title') ?></div>
						        </div>
						        <div class="info-wrap-b">
							        <ul class="custom-list dark">
								        <?= the_field('text') ?>
							        </ul>
						        </div>
					        </div>
				        </section>
			        <?php endif; ?>

			        <?php if ($n == 3): ?>
				        <section class="info-wrap info-wrap-rev services-problem-elem-3"><img class="info-wrap-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-bg-3.png" alt="">
					        <div class="info-wrap-elem-content">
						        <div class="info-wrap-t">
							        <div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/pie-chart-icon.svg" alt=""></div>
							        <div class="info-wrap-desc sm"><?= the_field('label') ?></div>
							        <div class="info-wrap-heading sm"><?= the_field('title') ?></div>
						        </div>
						        <div class="info-wrap-b">
							        <ul class="custom-list dark">
								        <?= the_field('text') ?>
							        </ul>
						        </div>
					        </div>
					        <div class="info-wrap-img-elem">
						        <picture class="info-wrap-img">
							        <source media="(max-width: 480px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-f-3-320.png">
							        <source media="(max-width: 991px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-f-3-768.png"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/problem-img/problem-img-f-3.png" alt="">
						        </picture>
					        </div>
				        </section>
			        <?php endif; ?>

			        <?php
			        $n++;
		        }

		        wp_reset_postdata();
	        ?>
        </div>
	    <?= get_template_part('blocks/block-testimonials') ?>
	    <?= get_template_part('blocks/block-awards') ?>
	    <?= get_template_part('blocks/block-about') ?>
        <?= get_template_part('blocks/block-insights') ?>
	    <?= get_template_part('blocks/block-demo') ?>
    </div>
</main>

<?php get_footer(); ?>
