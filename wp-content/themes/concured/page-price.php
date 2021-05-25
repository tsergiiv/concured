<?php get_header(); ?>

<main class="content">
    <div class="price-page">
        <section class="breadcrumbs-wrap container">
            <div class="breadcrumbs"><a class="breadcrumbs-link" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/concured-sl.svg" alt=""></a><a class="breadcrumbs-link" href="">Pricing </a></div>
        </section>
        <section class="price-plan container"><img class="price-plan-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/magnifier-img.png" alt="">
            <div class="price-plan-heading">
                <div class="price-plan-heading-text">
                    <?php
                        $posts = get_posts( array(
                            'post_type' => 'titles',
                        ) );

                        foreach( $posts as $post ) {
                            setup_postdata($post);
                            ?>

                            <div class="info-wrap-desc sm"><?= the_field('price_label') ?></div>
                            <div class="info-wrap-heading big"><?= the_field('price_title') ?></div>

                            <?php
                        }

                        wp_reset_postdata();
                    ?>
                </div>
                <div class="price-plan-select">
                    <select class="custom-select" id="currency-list">
                        <option value="usd">USD</option>
                        <option value="eur">EUR</option>
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

                                            <li usd="<?= get_field('usd_price_1') ?>" eur="<?= get_field('eur_price_1') ?>">$ <?= number_format(get_field('usd_price_1'), 2, '.', ',') ?></li>

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

                                            <li usd="<?= get_field('usd_price_1') ?>" eur="<?= get_field('eur_price_1') ?>">$ <?= number_format(get_field('usd_price_1'), 2, '.', ',') ?></li>

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

                                            <li usd="<?= get_field('usd_price_2') ?>" eur="<?= get_field('eur_price_2') ?>">$ <?= number_format(get_field('usd_price_2'), 2, '.', ',') ?></li>

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

                                            <li usd="<?= get_field('usd_price_2') ?>" eur="<?= get_field('eur_price_2') ?>">$ <?= number_format(get_field('usd_price_2'), 2, '.', ',') ?></li>

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

                                        <li <?php if (get_field('is_price')): ?>usd="<?= get_field('usd_price_1') ?>" eur="<?= get_field('eur_price_1') ?>"<?php endif ?>><?= get_field('is_price') ? '$ ' . number_format(get_field('usd_price_1'), 2, '.', ',') : get_field('multiplier') ?></li>

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

<script>
    jQuery('#currency-list').change(function() {
       let currency = jQuery(this).val();
       let prices = jQuery('li[' + currency + ']');
       let sign = '$';
       if (currency == 'eur') {
           sign = '€';
       }
       jQuery(prices).each(function() {
           let price = jQuery(this).attr(currency);
           jQuery(this).text(sign + ' ' + formatNumber(price));
       });
    });

    function formatNumber(number) {
        return Number(parseFloat(number).toFixed(2)).toLocaleString('en', {
            minimumFractionDigits: 2
        });
    }
</script>

<?php get_footer(); ?>
