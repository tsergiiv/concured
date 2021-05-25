<?php get_header(); ?>

    <main class="content">
        <div class="services-page">
            <section class="breadcrumbs-wrap container">
                <div class="breadcrumbs"><a class="breadcrumbs-link" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/concured-sl.svg" alt=""></a><a class="breadcrumbs-link" href="">Services </a></div>
            </section>
            <section class="page-head container">
                <h1 class="page-head-heading"><?= the_title() ?></h1>
            </section>

            <div class="post-wrap container">
                <section class="post-content">
                    <div class="post-content-wrap">
                        <?= the_content() ?>
                    </div>
                </section>
            </div>
        </div>
    </main>

<?php get_footer(); ?>