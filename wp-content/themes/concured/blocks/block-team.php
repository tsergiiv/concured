<section class="container about-team">
    <div class="info-wrap-heading big">Our team</div>
    <div class="about-team-nav">
        <div class="about-team-nav-link active" data-team-pos-tab="all">All teams</div>
	    <?php
		    $categories = get_categories( [
			    'taxonomy'     => 'team-category',
			    'type'         => 'team',
			    'hide_empty'   => 0,
		    ] );

		    $n = 1;
		    if( $categories ) {
			    foreach( $categories as $cat ) {
				    ?>

				    <div class="about-team-nav-link" data-team-pos-tab="<?= $cat->slug ?>"><?= $cat->name ?></div>

				    <?php
			    }
		    }
	    ?>
    </div>
    <div class="about-team-wrap"><img class="about-team-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/team/team-bg.svg" alt=""><img class="about-team-abstr-1" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-abstr-1.png" alt=""><img class="about-team-abstr-2" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-abstr-2.png" alt="">
	    <?php
		    $posts = get_posts( array(
			    'post_type'   => 'team',
			    'numberposts' => 10,
		    ) );

		    foreach( $posts as $post ) {
			    setup_postdata($post);
			    $terms = get_the_terms( get_the_ID(), 'team-category' );
			    $team_categories = '';
			    foreach( $terms as $term ) {
				    $team_categories .= $term->slug;
			    }
			    ?>

			    <div class="about-team-elem" data-team-pos="<?= $team_categories ?>">
				    <div class="about-team-photo">
					    <img src="<?= the_field('avatar') ?>" alt="<?= the_field('full_name') ?> Photo">
				    </div>
				    <div class="about-team-name"><?= the_field('full_name') ?></div>
				    <div class="about-team-position"><?= the_field('position') ?></div>
				    <div class="about-team-social">
					    <a class="about-team-social-link" href="<?= the_field('twitter') ?>">
					        <img src="<?php bloginfo('template_url'); ?>/assets/img/general/social/tw-t-icon.svg" alt="Twitter icon">
					    </a>
					    <a class="about-team-social-link" href="<?= the_field('facebook') ?>">
						    <img src="<?php bloginfo('template_url'); ?>/assets/img/general/social/fb-t-icon.svg" alt="Facebook icon">
					    </a>
					    <a class="about-team-social-link" href="<?= the_field('instagram') ?>">
						    <img src="<?php bloginfo('template_url'); ?>/assets/img/general/social/inst-t-icon.svg" alt="Instagram icon">
					    </a>
				    </div>
			    </div>

			    <?php
		    }

		    wp_reset_postdata();
	    ?>
    </div>
</section>