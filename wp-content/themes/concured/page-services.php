<?php get_header(); ?>

<main class="content">
    <div class="services-page">
        <section class="breadcrumbs-wrap container">
            <div class="breadcrumbs"><a class="breadcrumbs-link" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/concured-sl.svg" alt=""></a><a class="breadcrumbs-link" href="">Services </a></div>
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
