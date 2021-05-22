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
                    <div class="price-plan-category-elem">
                        <div class="price-plan-category-elem-heading">Auditing</div>
                        <ul class="custom-list price-plan-category-list">
                            <li>Up to 5 souces</li>
                            <li>Up to 10 souces</li>
                            <li>Up to 20 souces</li>
                        </ul>
                    </div>
                    <div class="price-plan-category-elem">
                        <div class="price-plan-category-elem-heading">Stategy</div>
                        <ul class="custom-list price-plan-category-list">
                            <li>Up to 5 souces</li>
                            <li>Up to 10 souces</li>
                            <li>Up to 20 souces</li>
                        </ul>
                    </div>
                    <div class="price-plan-category-elem">
                        <div class="price-plan-category-elem-heading">Personalization</div>
                        <ul class="custom-list price-plan-category-list">
                            <li>Page Views Per Month</li>
                            <li>Content Sources</li>
                            <li>Content Volume</li>
                            <li>Industry (Finance)</li>
                            <li>Industry (Finance)</li>
                            <li>Industry (Healthcare)</li>
                        </ul>
                    </div>
                </div>
                <div class="price-plan-info">
                    <div class="price-plan-info-wrap">
                        <div class="price-plan-info-elem"><img class="price-plan-info-elem-bg-1" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-1.svg" alt="">
                            <div class="price-plan-info-elem-content">
                                <div class="info-wrap-icon price-plan-info-elem-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/software-icon.svg" alt=""></div>
                                <div class="price-plan-info-elem-heading">Software</div>
                                <ul class="price-plan-info-elem-list">
                                    <li>$ 1,295.00</li>
                                    <li>$ 1,945.00</li>
                                    <li>$ 3,245.00</li>
                                </ul>
                                <ul class="price-plan-info-elem-list second-list">
                                    <li>$ 2,295.00</li>
                                    <li>$ 4,935.00</li>
                                    <li>$ 7,795.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-plan-info-elem">
                            <div class="price-plan-info-elem-content">
                                <div class="info-wrap-icon price-plan-info-elem-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/people-icon.svg" alt=""></div>
                                <div class="price-plan-info-elem-heading">Service</div>
                                <ul class="price-plan-info-elem-list">
                                    <li>$ 2,595.00</li>
                                    <li>$ 3,895.00</li>
                                    <li>$ 6,495.00</li>
                                </ul>
                                <ul class="price-plan-info-elem-list second-list">
                                    <li>$ 5,845.00</li>
                                    <li>$ 9,745.00</li>
                                    <li>$ 15,595.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="price-plan-info-elem one">
                        <div class="price-plan-info-elem-content">
                            <ul class="price-plan-info-elem-list">
                                <li>$ 0.01</li>
                                <li>$ 260.00</li>
                                <li>$ 0.01</li>
                                <li>10x</li>
                                <li>5x</li>
                                <li>10x</li>
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
