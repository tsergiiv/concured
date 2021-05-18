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
            <section class="container about-partners">
                <div class="info-wrap-heading big">Our partners</div>
                <section class="partners">
                    <div class="partners-elem"><img class="partners-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/clients/hp.png" alt="HP"></div>
                    <div class="partners-elem"><img class="partners-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/clients/idg.png" alt="IDG"></div>
                    <div class="partners-elem"><img class="partners-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/clients/spg.png" alt="SPG"></div>
                    <div class="partners-elem"><img class="partners-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/clients/nationwide.png" alt="Nationwide"></div>
                    <div class="partners-elem"><img class="partners-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/clients/wpp.png" alt="WPP"></div>
                    <div class="partners-elem"><img class="partners-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/clients/bbc.png" alt="BBC"></div>
                    <div class="partners-elem"><img class="partners-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/clients/samsung.png" alt="Samsung"></div>
                    <div class="partners-elem"><img class="partners-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/clients/mc.png" alt="MC"></div>
                    <div class="partners-elem"><img class="partners-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/clients/financialtimes.png" alt="Financial Times"></div>
                    <div class="partners-elem"><img class="partners-elem-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/clients/mcsaatchi.png" alt="M&amp;Csaatchi"></div>
                </section>
                <figure class="about-partners-quote">
                    <blockquote class="about-partners-quote-text">These guys are real professionals. Undoubtedly!</blockquote>
                    <figcaption class="about-partners-quote-person"><img class="about-partners-quote-person-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/comment/comment-img-2.jpg" alt="Partners quote person photo">
                        <div class="about-partners-quote-person-name">Mark Thomson</div>
                        <div class="about-partners-quote-person-position">Director analytics SJR</div>
                    </figcaption>
                </figure>
            </section>
	        <?= get_template_part('blocks/block-awards') ?>
	        <?= get_template_part('blocks/block-demo') ?>
        </div>
    </main>

<?php get_footer(); ?>