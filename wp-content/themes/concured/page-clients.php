<?php get_header(); ?>

<main class="content">
    <div class="clients-page">
        <section class="breadcrumbs-wrap container">
            <div class="breadcrumbs">
                <a class="breadcrumbs-link" href="<?= get_home_url(); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/concured-sl.svg" alt="">
                </a>
                <a class="breadcrumbs-link" href="">Company</a>
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

			        <h1 class="page-head-heading"><?= the_field('our_clients_title') ?></h1>
			        <div class="page-head-desc">
				        <?= the_field('our_clients_text') ?>
			        </div>

			        <?php
		        }

		        wp_reset_postdata();
	        ?>
        </section>
        <div class="container clients-partners">
            <section class="partners">
	            <?php
		            $posts = get_posts( array(
				            'post_type' => 'clients',
				            'numberposts' => '10'
		            ) );

		            foreach( $posts as $post ) {
			            setup_postdata($post);
			            ?>

			            <div class="partners-elem"><img class="partners-elem-img" src="<?= the_field('image') ?>" alt="Client"></div>

			            <?php
		            }

		            wp_reset_postdata();
	            ?>
            </section>
        </div>
	    <?= get_template_part('blocks/block-testimonials') ?>
	    <?= get_template_part('blocks/block-demo') ?>
    </div>
</main>

<?php get_footer(); ?>
