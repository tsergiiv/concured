<section class="partners">
	<?php
		$posts = get_posts( array(
			'post_type'   => 'partners',
			'numberposts' => 10,
		) );

		foreach( $posts as $post ) {
			setup_postdata($post);
			?>

			<div class="partners-elem">
				<img class="partners-elem-img" src="<?= the_field('image') ?>" alt="Partners">
			</div>

			<?php
		}

		wp_reset_postdata();
	?>
</section>