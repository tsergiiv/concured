<?php get_header(); ?>

    <main class="content">
        <div class="about-page">
            <section class="breadcrumbs-wrap container">
                <div class="breadcrumbs"><a class="breadcrumbs-link" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/concured-sl.svg" alt=""></a><a class="breadcrumbs-link" href="">About Us</a></div>
            </section>
	        <?= get_template_part('blocks/block-aboutus') ?>
            <div class="dark-bg-wrap">
	            <?= get_template_part('blocks/block-team') ?>
            </div>
	        <?= get_template_part('blocks/block-about-partners') ?>
	        <?= get_template_part('blocks/block-awards') ?>
	        <?= get_template_part('blocks/block-demo') ?>
        </div>
    </main>

<?php get_footer(); ?>