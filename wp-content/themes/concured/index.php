<?php get_header(); ?>

	<!-- CONTENT -->
	<!-- #1 Enrich, Transform, Secure & Deliver Quality Data -->
	<!-- #2 Unique Value Proposition -->
	<!-- #3 What We Know Today -->
	<!-- #4 Technology Now Vs Future -->
	<!-- #5 Where Global Data Governance Future Is -->
	<!-- #6 Where Enterprise Data Managment Future Is -->
	<!-- #7 Value We Deliever -->
	<!-- #8 Problems We Solve -->
	<!-- #9 Platform and Solutions -->
	<!-- #10 Key features will include: -->
	<!-- #11 High Level Solution Architecture -->
	<!-- #12 Solutions for FinTech -->
	<!-- #13 Business Model -->
	<!-- #14 Success Story -->
	<!-- #15 Success Projects -->
	<!-- #16 Why Invest with Us -->
	<!-- #17 Investory's Org Chart -->
	<!-- #18 Market Overview -->
	<!-- #19 Market Size, Acquisitions and Funding -->
	<!-- #20 Competitive Overview -->
	<!-- #21 Financials: Profits by Business Segment -->
	<!-- #22 Financials: Project Income and Projected Expenses -->
	<!-- #23 FinTech Venture Capital News and Highlights -->
	<!-- #24 Key Leadership -->
	<!-- #25 Start new era of data -->
	<!-- #26 Disclaimer -->

	<main>
		<?php
			$posts = get_posts( array(
					'numberposts' => 25,
					'post_type'   => 'block',
			) );

			foreach( $posts as $post ) {
				setup_postdata($post);

				$block_number = get_field('block_number');
				get_field('visible') ? get_template_part('blocks/block' . $block_number) : '';
			}

			wp_reset_postdata(); // сброс
		?>
	</main>

<?php get_footer(); ?>