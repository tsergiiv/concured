<?php
	$posts = get_posts( array(
		'post_type' => 'about-us',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<section class="page-head container">
			<h1 class="page-head-heading"><?= the_field('top_title') ?></h1>
			<div class="page-head-desc">
				<?= the_field('top_text') ?>
			</div>
			<button class="btn-big btn-coral page-head-btn modal-o-btn" data-modal-btn="book-modal"><?= the_field('top_button_text') ?></button>
		</section>
		<section class="info-wrap info-wrap-rev about-page-concured"><img class="info-wrap-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-bg-1.svg" alt="">
			<div class="info-wrap-elem-content">
				<div class="fino-wrap-t">
					<div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/search-icon.svg" alt=""></div>
					<div class="info-wrap-desc sm"><?= the_field('label_1') ?></div>
					<div class="info-wrap-heading big"><?= the_field('title_1') ?></div>
				</div>
				<div class="info-wrap-b">
					<ul class="custom-list">
						<?= the_field('text_1') ?>
					</ul><a class="read-more read-more-list" href="<?= the_field('link_url_1') ?>"><?= the_field('link_text_1') ?></a>
				</div>
			</div>
			<div class="info-wrap-img-elem">
				<picture class="info-wrap-img">
					<source media="(max-width: 480px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/about-concured-320.png">
					<source media="(max-width: 991px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/about-concured-768.png"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/about-concured-2.png" alt="">
				</picture>
			</div>
		</section>
		<section class="info-wrap info-wrap-def about-page-mission"><img class="info-wrap-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-bg-2.svg" alt="">
			<div class="info-wrap-img-elem">
				<picture class="info-wrap-img">
					<source media="(max-width: 480px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/mission-img-320.png">
					<source media="(max-width: 991px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/mission-img-768.png"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/mission-img.png" alt="">
				</picture>
			</div>
			<div class="info-wrap-elem-content">
				<div class="fino-wrap-t">
					<div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/crosshair-icon.svg" alt=""></div>
					<div class="info-wrap-desc sm"><?= the_field('label_2') ?></div>
					<div class="info-wrap-heading big"><?= the_field('title_2') ?></div>
				</div>
				<div class="info-wrap-b">
					<?= the_field('text_2') ?>
				</div>
			</div>
		</section>
		<section class="container about-approach"><img class="about-approach-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/magnifier-img.png">
			<div class="info-wrap-heading big"><?= the_field('text_3') ?></div>
			<div class="about-approach-wrap">
				<div class="about-approach-elem"><img class="about-approach-elem-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/approach/approach-bg.svg" alt="">
					<div class="about-approach-elem-content">
						<div class="about-approach-elem-img-wrap"><img class="about-approach-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/approach/approach-img-1.png" alt="Approach image #1"></div>
						<div class="about-approach-elem-heading"><?= the_field('subtitle_1') ?></div>
						<ul class="custom-list">
							<?= the_field('text_3_1') ?>
						</ul>
					</div>
				</div>
				<div class="about-approach-elem"><img class="about-approach-elem-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/approach/approach-bg.svg" alt="">
					<div class="about-approach-elem-content">
						<div class="about-approach-elem-img-wrap"><img class="about-approach-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/approach/approach-img-2.png" alt="Approach image #2"></div>
						<div class="about-approach-elem-heading"><?= the_field('subtitle_2') ?></div>
						<ul class="custom-list">
							<?= the_field('text_3_2') ?>
						</ul>
					</div>
				</div>
				<div class="about-approach-elem"><img class="about-approach-elem-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/approach/approach-bg.svg" alt="">
					<div class="about-approach-elem-content">
						<div class="about-approach-elem-img-wrap"><img class="about-approach-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/approach/approach-img-3.png" alt="Approach image #3"></div>
						<div class="about-approach-elem-heading"><?= the_field('subtitle_3') ?></div>
						<ul class="custom-list">
							<?= the_field('text_3_2') ?>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<?php
	}

	wp_reset_postdata();
?>