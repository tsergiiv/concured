<?php get_header(); ?>

<?php
    $offset = 0;

    $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'post',
    );

    $posts_query = new WP_Query($args);
    $post_count = $posts_query->post_count;
?>

    <main class="content">
        <div class="blog-page">
            <section class="breadcrumbs-wrap container">
                <div class="breadcrumbs"><a class="breadcrumbs-link" href="<?= get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/concured-sl.svg" alt=""></a><a class="breadcrumbs-link" href=""><?= the_title() ?></a></div>
            </section>
            <section class="page-head container">
	            <?php
		            $posts = get_posts( array(
				            'post_type' => 'titles',
		            ) );

		            foreach( $posts as $post ) {
			            setup_postdata($post);
			            ?>

			            <h1 class="page-head-heading"><?= the_field('blog_title') ?></h1>
			            <div class="page-head-desc">
				            <?= the_field('blog_text') ?>
			            </div>

			            <?php
		            }

		            wp_reset_postdata();
	            ?>
            </section>
            <section class="blog-article container">
                <div class="blog-article-wrap" id="ajax-posts">
	                <?php
		                $posts = get_posts( array(
			                'post_type' => 'post',
			                'numberposts' => 8,
		                ) );

		                foreach( $posts as $post ) {
			                setup_postdata($post);
                            $offset++;
                            get_template_part('blocks/block-blog-article');
		                }

		                wp_reset_postdata();
	                ?>
                </div>
                <button class="btn-s btn-blue blog-article-btn" id="more_posts" onclick="loadClick(<?php echo $offset; ?>)">Load more Posts</button>
            </section>
            <section class="big-slider blog-library">
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

			                    <div class="big-slider-desc"><?= the_field('library_label') ?></div>
			                    <h1 class="big-slider-heading"><?= the_field('library_title') ?></h1>

			                    <?php
		                    }

		                    wp_reset_postdata();
	                    ?>
                    </div>
                    <div class="big-slider-wrap">
	                    <?php
		                    $posts = get_posts( array(
			                    'post_type' => 'library',
		                    ) );

		                    foreach( $posts as $post ) {
			                    setup_postdata($post);
			                    ?>

			                    <div class="big-slider-elem">
				                    <img class="blog-library-icon" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/book.svg" alt="">
				                    <div class="blog-library-book">
					                    <?= the_field('title') ?>
				                    </div>
				                    <a class="read-more blog-library-download" href="<?= the_field('file') ?>" target="_blank" rel="nofollow noopener">Download</a>
			                    </div>

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
        </div>
    </main>

    <script>
        let postCount = <?= $post_count ?>;
    </script>

<?php get_footer(); ?>