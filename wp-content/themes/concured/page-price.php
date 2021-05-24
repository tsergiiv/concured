<?php get_header(); ?>

<main class="content">
    <div class="price-page">
        <section class="breadcrumbs-wrap container">
            <div class="breadcrumbs"><a class="breadcrumbs-link" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/concured-sl.svg" alt=""></a><a class="breadcrumbs-link" href="">Pricing </a></div>
        </section>
        <section class="price-plan container"><img class="price-plan-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/magnifier-img.png" alt="">
            <div class="price-plan-heading">
                <div class="price-plan-heading-text">
                    <div class="info-wrap-desc sm">Pricing</div>
                    <div class="info-wrap-heading big">Find the right plan</div>
                </div>
                <div class="price-plan-select">
                    <select class="custom-select">
                        <option value="0">USD</option>
                        <option value="1">EUR</option>
                        <option value="2">JPY</option>
                        <option value="3">GBP</option>
                        <option value="4">CHF</option>
                        <option value="5">CAD</option>
                        <option value="6">PLN</option>
                    </select>
                </div>
            </div>
            <div class="price-plan-wrap">
                <div class="price-plan-category">
                    <?php
                        $categories = get_categories( [
                            'taxonomy'   => 'price-category',
                            'type'       => 'price',
                            'orderby'    => 'term_id',
                            'order'      => 'ASC',
                            'hide_empty' => 0,
                        ] );

                        $n = 1;
                        if( $categories ) {
                            foreach( $categories as $cat ) {
                                ?>

                                <div class="price-plan-category-elem">
                                    <div class="price-plan-category-elem-heading"><?= $cat->name ?></div>
                                    <ul class="custom-list price-plan-category-list">
                                        <?php
                                        $posts = get_posts( array(
                                            'post_type'   => 'price',
                                            'numberposts' => 10,
                                            'tax_query'   => array(
                                                array(
                                                    'taxonomy' => 'price-category',
                                                    'field' => 'price-category',
                                                    'terms' => $cat->term_id,
                                                )
                                            )
                                        ) );

                                        foreach( $posts as $post ) {
                                            setup_postdata($post);
                                            ?>

                                            <li><?= the_field('label') ?></li>

                                            <?php
                                        }

                                        wp_reset_postdata();
                                        ?>
                                    </ul>
                                </div>

                                <?php
                            }
                        }
                    ?>
                </div>
                <div class="price-plan-info">
                    <div class="price-plan-info-wrap">
                        <div class="price-plan-info-elem"><img class="price-plan-info-elem-bg-1" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-1.svg" alt="">
                            <div class="price-plan-info-elem-content">
                                <div class="info-wrap-icon price-plan-info-elem-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/software-icon.svg" alt=""></div>
                                <div class="price-plan-info-elem-heading">Software</div>
                                <ul class="price-plan-info-elem-list">
                                    <?php
                                        $posts = get_posts( array(
                                            'post_type' => 'price',
                                            'tax_query'   => array(
                                                array(
                                                    'taxonomy' => 'price-category',
                                                    'field' => 'slug',
                                                    'terms' => 'auditing',
                                                )
                                            )
                                        ) );

                                        foreach( $posts as $post ) {
                                            setup_postdata($post);
                                            ?>

                                            <li>$ <?= number_format(get_field('option_1'), 2, '.', ',') ?></li>

                                            <?php
                                        }

                                        wp_reset_postdata();
                                    ?>
                                </ul>
                                <ul class="price-plan-info-elem-list second-list">
                                    <?php
                                        $posts = get_posts( array(
                                            'post_type' => 'price',
                                            'tax_query'   => array(
                                                array(
                                                    'taxonomy' => 'price-category',
                                                    'field' => 'slug',
                                                    'terms' => 'strategy',
                                                )
                                            )
                                        ) );

                                        foreach( $posts as $post ) {
                                            setup_postdata($post);
                                            ?>

                                            <li>$ <?= number_format(get_field('option_1'), 2, '.', ',') ?></li>

                                            <?php
                                        }

                                        wp_reset_postdata();
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="price-plan-info-elem">
                            <div class="price-plan-info-elem-content">
                                <div class="info-wrap-icon price-plan-info-elem-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/people-icon.svg" alt=""></div>
                                <div class="price-plan-info-elem-heading">Service</div>
                                <ul class="price-plan-info-elem-list">
                                    <?php
                                        $posts = get_posts( array(
                                            'post_type' => 'price',
                                            'tax_query'   => array(
                                                array(
                                                    'taxonomy' => 'price-category',
                                                    'field' => 'slug',
                                                    'terms' => 'auditing',
                                                )
                                            )
                                        ) );

                                        foreach( $posts as $post ) {
                                            setup_postdata($post);
                                            ?>

                                            <li>$ <?= number_format(get_field('option_2'), 2, '.', ',') ?></li>

                                            <?php
                                        }

                                        wp_reset_postdata();
                                    ?>
                                </ul>
                                <ul class="price-plan-info-elem-list second-list">
                                    <?php
                                        $posts = get_posts( array(
                                            'post_type' => 'price',
                                            'tax_query'   => array(
                                                array(
                                                    'taxonomy' => 'price-category',
                                                    'field' => 'slug',
                                                    'terms' => 'strategy',
                                                )
                                            )
                                        ) );

                                        foreach( $posts as $post ) {
                                            setup_postdata($post);
                                            ?>

                                            <li>$ <?= number_format(get_field('option_2'), 2, '.', ',') ?></li>

                                            <?php
                                        }

                                        wp_reset_postdata();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="price-plan-info-elem one">
                        <div class="price-plan-info-elem-content">
                            <ul class="price-plan-info-elem-list">
                                <?php
                                    $posts = get_posts( array(
                                        'post_type'   => 'price',
                                        'numberposts' => 10,
                                        'tax_query'   => array(
                                            array(
                                                'taxonomy' => 'price-category',
                                                'field' => 'slug',
                                                'terms' => 'personalization',
                                            )
                                        )
                                    ) );

                                    foreach( $posts as $post ) {
                                        setup_postdata($post);
                                        ?>

                                        <li><?= get_field('type') == 'Price' ? '$ ' . number_format(get_field('option_1'), 2, '.', ',') : get_field('option_1') ?></li>

                                        <?php
                                    }

                                    wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?= get_template_part('blocks/block-demo') ?>
        <?= get_template_part('blocks/block-testimonials') ?>
        <?= get_template_part('blocks/block-awards') ?>
        <?= get_template_part('blocks/block-about') ?>
        <?= get_template_part('blocks/block-insights') ?>
    </div>
</main>

<?php get_footer(); ?>
