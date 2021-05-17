<?php get_header(); ?>

	<!-- CONTENT -->
	<!-- #1 Enrich, Transform, Secure & Deliver Quality Data -->

	<main class="content">
		<div class="main-page">
			<?= get_template_part('blocks/block-main-top') ?>
			<?= get_template_part('blocks/block-clients') ?>
			<section class="container video">
				<video class="video-content" width="100" poster="<?php bloginfo('template_url'); ?>/assets/img/content/video/videoprev.png" muted="muted" playsinline>
					<source src="<?php bloginfo('template_url'); ?>/assets/img/content/video/video.mp4" type="video/mp4"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/video/videoprev.png" title="Your browser does not support the &lt;video&gt; tag">
				</video>
			</section>
			<div class="dark-bg-wrap">
				<?= get_template_part('blocks/block-features') ?>
			</div>
			<?= get_template_part('blocks/block-problems') ?>
			<?= get_template_part('blocks/block-testimonials') ?>
			<?= get_template_part('blocks/block-about') ?>
			<?= get_template_part('blocks/block-awards') ?>
			<section class="article-slider container"><img class="article-slider-bg-one" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-1.svg" alt=""><img class="article-slider-bg-two" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-2.svg" alt=""><img class="article-slider-bg-three" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-3.svg" alt="">
				<div class="article-slider-head">
					<div class="info-wrap-desc sm">Valuable insights, smart recommendations, and expert guides</div>
					<div class="article-slider-head-wrap">
						<div class="info-wrap-heading big">Fresh Insights</div>
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
				</div>
				<div class="article-slider-wrap">
					<div class="article-slider-elem">
						<article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-1.jpg" alt="Article #1"></a>
							<div class="article-info">
								<div class="article-tag">Article</div>
								<div class="article-date">14 september 14:44</div>
							</div>
							<div class="article-name">Effective Ways To Seamlessly Boost Your Brand Marketing</div><a class="read-more article-read-more" href="">Read more</a>
						</article>
					</div>
					<div class="article-slider-elem">
						<article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-2.jpg" alt="Article #1"></a>
							<div class="article-info">
								<div class="article-tag">Article</div>
								<div class="article-date">14 september 14:44</div>
							</div>
							<div class="article-name">How To Hold Your Audience’s Attention By Having A Conversation</div><a class="read-more article-read-more" href="">Read more</a>
						</article>
					</div>
					<div class="article-slider-elem">
						<article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-3.jpg" alt="Article #1"></a>
							<div class="article-info">
								<div class="article-tag">Article</div>
								<div class="article-date">14 september 14:44</div>
							</div>
							<div class="article-name">How To Save Time In Content Creation While Effectively Communicating</div><a class="read-more article-read-more" href="">Read more</a>
						</article>
					</div>
					<div class="article-slider-elem">
						<article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-1.jpg" alt="Article #1"></a>
							<div class="article-info">
								<div class="article-tag">Article</div>
								<div class="article-date">14 september 14:44</div>
							</div>
							<div class="article-name">Effective Ways To Seamlessly Boost Your Brand Marketing</div><a class="read-more article-read-more" href="">Read more</a>
						</article>
					</div>
					<div class="article-slider-elem">
						<article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-2.jpg" alt="Article #1"></a>
							<div class="article-info">
								<div class="article-tag">Article</div>
								<div class="article-date">14 september 14:44</div>
							</div>
							<div class="article-name">How To Hold Your Audience’s Attention By Having A Conversation</div><a class="read-more article-read-more" href="">Read more</a>
						</article>
					</div>
					<div class="article-slider-elem">
						<article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-3.jpg" alt="Article #1"></a>
							<div class="article-info">
								<div class="article-tag">Article</div>
								<div class="article-date">14 september 14:44</div>
							</div>
							<div class="article-name">How To Save Time In Content Creation While Effectively Communicating</div><a class="read-more article-read-more" href="">Read more</a>
						</article>
					</div>
					<div class="article-slider-elem">
						<article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-1.jpg" alt="Article #1"></a>
							<div class="article-info">
								<div class="article-tag">Article</div>
								<div class="article-date">14 september 14:44</div>
							</div>
							<div class="article-name">Effective Ways To Seamlessly Boost Your Brand Marketing</div><a class="read-more article-read-more" href="">Read more</a>
						</article>
					</div>
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
			<?= get_template_part('blocks/block-demo') ?>
		</div>
	</main>

<?php get_footer(); ?>