<?php get_header(); ?>

<?php wpb_set_post_views(get_the_ID()); ?>

    <main class="content">
        <div class="post-page">
            <section class="breadcrumbs-wrap container">
                <div class="breadcrumbs">
                    <a class="breadcrumbs-link" href="<?= get_home_url(); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/concured-sl.svg" alt="">
                    </a>
                    <a class="breadcrumbs-link" href="<?= get_home_url(); ?>/blog">Blog</a>
                    <a class="breadcrumbs-link" href=""><?= the_title() ?></a>
                </div>
            </section>
            <section class="page-head container">
                <h1 class="page-head-heading"><?= the_title() ?></h1>
            </section>
            <div class="post-wrap container">
                <section class="post-content">
                    <div class="post-content-wrap">
                        <?= the_content() ?>
						<?php if (get_field('quote')): ?>
						<?php $quote = get_field('quote'); ?>
                        <figure class="post-content-quote">
                            <div class="post-content-quote-wrap">
                                <blockquote class="post-content-quote-text">
	                                <?= $quote->text ?>
                                </blockquote>
                                <figurecaption class="post-content-quote-caption">
	                                <img class="post-content-person-img post-content-quote-caption-img" src="<?= wp_get_attachment_image_url($quote->author_avatar) ?>" alt="">
                                    <div class="post-content-quote-caption-info">
                                        <div class="post-content-name"><?= $quote->author_full_name ?></div>
                                        <div class="post-content-position"><?= $quote->author_position ?></div>
                                    </div>
                                </figurecaption>
                            </div>
                        </figure>
						<?php endif ?>
                        <?php if (get_field('full_name')): ?>
                        <div class="post-author">
                            <div class="post-author-wrap"><img class="post-content-person-img post-author-img" src="<?= the_field('avatar') ?>" alt="">
                                <div class="post-author-info">
                                    <div class="post-content-position">Author</div>
                                    <div class="post-content-name"><?= the_field('full_name') ?></div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>
                        <div class="post-tag">
                            <?php
                                $tags = get_the_tags();
                                foreach ( $tags as $tag ) {
                                    ?>

                                    <span class="btn-blue post-tag-link"><?= $tag->name ?></span>

                                    <?php
                                }
                            ?>
                        </div>
                        <div class="post-footer">
                            <div class="post-share">
                                <div class="post-share-title">Share</div>
                                <?= do_shortcode('[addtoany]') ?>
                            </div>
                            <div class="post-up-btn info-wrap-icon">
                                <img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/arrow-up.svg" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <aside class="post-popular">
                    <div class="post-popular-heading">Popular articles</div>
                    <div class="post-popular-wrap">
	                    <?php
		                    $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
		                    while ( $popularpost->have_posts() ) :
			                    $popularpost->the_post();
		                        ?>

			                    <article class="article-elem">
				                    <a class="article-cover" href="<?= the_permalink() ?>">
					                    <img src="<?= the_post_thumbnail() ?>" alt="Article">
				                    </a>
				                    <div class="article-info">
					                    <div class="article-tag">Article</div>
					                    <div class="article-date"><?= strtolower(get_the_date()) ?> <?= the_time() ?></div>
				                    </div>
				                    <div class="article-name"><?= the_title() ?></div>
				                    <a class="read-more article-read-more" href="<?= the_permalink() ?>">Read more</a>
			                    </article>

		                        <?php
		                    endwhile;
	                    ?>
                    </div>
                </aside>
            </div>
            <section class="article-slider container"><img class="article-slider-bg-one" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-1.svg" alt=""><img class="article-slider-bg-two" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-2.svg" alt=""><img class="article-slider-bg-three" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-3.svg" alt="">
                <div class="article-slider-head">
                    <div class="article-slider-head-wrap">
                        <div class="info-wrap-heading big">Related stories</div>
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
                    <?php
                        $orig_post = $post;
                        global $post;
                        $tags = wp_get_post_tags(get_the_ID());
                        if ($tags) {
                            $tag_ids = array();
                            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                            $args=array(
                                'tag__in' => $tag_ids,
                                'post__not_in' => array(get_the_ID()),
                                'posts_per_page' => 10, // Number of related posts that will be shown.
                                'ignore_sticky_posts' => 1
                            );
                            $my_query = new wp_query( $args );
                            if( $my_query->have_posts() ) {
                                while( $my_query->have_posts() ) {
                                    $my_query->the_post(); ?>

                                    <div class="article-slider-elem">
                                        <article class="article-elem">
                                            <a class="article-cover" href="<?= the_permalink() ?>">
                                                <img src="<?= the_post_thumbnail() ?>" alt="Article">
                                            </a>
                                            <div class="article-info">
                                                <div class="article-tag">Article</div>
                                                <div class="article-date"><?= strtolower(get_the_date()) ?> <?= the_time() ?></div>
                                            </div>
                                            <div class="article-name"><?= the_title() ?></div>
                                            <a class="read-more article-read-more" href="<?= the_permalink() ?>">Read more</a>
                                        </article>
                                    </div>

                                <?php }
                            }
                        }
                        $post = $orig_post;
                        wp_reset_query();
                    ?>
                </div>
            </section>
        </div>
    </main>

<?php get_footer(); ?>