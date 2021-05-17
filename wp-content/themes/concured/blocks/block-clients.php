<section class="clients container">
	<?php
		$posts = get_posts( array(
				'post_type' => 'titles',
		) );

		foreach( $posts as $post ) {
			setup_postdata($post);
			?>

			<div class="clients-title"><?= the_field('clients_title') ?></div>

			<?php
		}

		wp_reset_postdata();
	?>
    <div class="clients-wrap">
        <?php
            $posts = get_posts( array(
                'post_type' => 'clients',
                'numberposts' => '10'
            ) );

            foreach( $posts as $post ) {
                setup_postdata($post);
                ?>

                <div class="clients-elem"><img class="clients-img" src="<?= the_field('image') ?>" alt=""></div>

                <?php
            }

            wp_reset_postdata();
        ?>
    </div>
</section>