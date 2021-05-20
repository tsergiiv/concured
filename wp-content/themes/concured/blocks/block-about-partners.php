<section class="container about-partners">
    <?php
        $posts = get_posts( array(
            'post_type' => 'about-us',
        ) );

        foreach( $posts as $post ) {
            setup_postdata($post);
            ?>

            <div class="info-wrap-heading big"><?= the_field('partners_title') ?></div>

	        <?php
        }

        wp_reset_postdata();
    ?>

	<?= get_template_part('blocks/block-partners') ?>

	<?php
		$posts = get_posts( array(
			'post_type' => 'about-us',
		) );

		foreach( $posts as $post ) {
			setup_postdata($post);
			?>

			<figure class="about-partners-quote">
				<blockquote class="about-partners-quote-text"><?= the_field('partners_quote_text') ?></blockquote>
				<figcaption class="about-partners-quote-person">
					<img class="about-partners-quote-person-img" src="<?= the_field('partners_quote_avatar') ?>" alt="Partners quote person photo">
					<div class="about-partners-quote-person-name"><?= the_field('partners_quote_name') ?></div>
					<div class="about-partners-quote-person-position"><?= the_field('partners_quote_position') ?></div>
				</figcaption>
			</figure>

			<?php
		}

		wp_reset_postdata();
	?>

</section>