<?php get_header(); ?>

<main class="content">
    <div class="platform-page">
        <section class="breadcrumbs-wrap container">
            <div class="breadcrumbs"><a class="breadcrumbs-link" href="<?= get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/concured-sl.svg" alt=""></a><a class="breadcrumbs-link" href="">Platform </a></div>
        </section>
	    <?= get_template_part('blocks/block-platform') ?>
	    <?= get_template_part('blocks/block-faq') ?>
        <section class="article-slider container"><img class="article-slider-bg-one" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-1.svg" alt=""><img class="article-slider-bg-two" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-2.svg" alt=""><img class="article-slider-bg-three" src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-bg-3.svg" alt="">
            <div class="article-slider-head">
                <div class="info-wrap-desc sm">Valuable insights, smart recommendations, and expert guides</div>
                <div class="article-slider-head-wrap">
                    <div class="info-wrap-heading big">Fresh Insights</div>
                    <div class="slider-button-wrap article-slider-btn">
                        <button class="slider-button slider-button-prev article-prev">
                            <svg class="slider-button-icon">
                                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-l"></use>
                            </svg>
                        </button>
                        <button class="slider-button slider-button-next article-next">
                            <svg class="slider-button-icon">
                                <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-r"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="article-slider-wrap">
                <div class="article-slider-elem">
                    <article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-1.jpg" alt="Article #1"></a>
                        <div class="article-info">
                            <div class="article-tag">Article</div>
                            <div class="article-date">14 september 14:44</div>
                        </div>
                        <div class="article-name">Effective Ways To Seamlessly Boost Your Brand Marketing</div><a class="read-more article-read-more" href="">Read more</a>
                    </article>
                </div>
                <div class="article-slider-elem">
                    <article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-2.jpg" alt="Article #1"></a>
                        <div class="article-info">
                            <div class="article-tag">Article</div>
                            <div class="article-date">14 september 14:44</div>
                        </div>
                        <div class="article-name">How To Hold Your Audience’s Attention By Having A Conversation</div><a class="read-more article-read-more" href="">Read more</a>
                    </article>
                </div>
                <div class="article-slider-elem">
                    <article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-3.jpg" alt="Article #1"></a>
                        <div class="article-info">
                            <div class="article-tag">Article</div>
                            <div class="article-date">14 september 14:44</div>
                        </div>
                        <div class="article-name">How To Save Time In Content Creation While Effectively Communicating</div><a class="read-more article-read-more" href="">Read more</a>
                    </article>
                </div>
                <div class="article-slider-elem">
                    <article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-1.jpg" alt="Article #1"></a>
                        <div class="article-info">
                            <div class="article-tag">Article</div>
                            <div class="article-date">14 september 14:44</div>
                        </div>
                        <div class="article-name">Effective Ways To Seamlessly Boost Your Brand Marketing</div><a class="read-more article-read-more" href="">Read more</a>
                    </article>
                </div>
                <div class="article-slider-elem">
                    <article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-2.jpg" alt="Article #1"></a>
                        <div class="article-info">
                            <div class="article-tag">Article</div>
                            <div class="article-date">14 september 14:44</div>
                        </div>
                        <div class="article-name">How To Hold Your Audience’s Attention By Having A Conversation</div><a class="read-more article-read-more" href="">Read more</a>
                    </article>
                </div>
                <div class="article-slider-elem">
                    <article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-3.jpg" alt="Article #1"></a>
                        <div class="article-info">
                            <div class="article-tag">Article</div>
                            <div class="article-date">14 september 14:44</div>
                        </div>
                        <div class="article-name">How To Save Time In Content Creation While Effectively Communicating</div><a class="read-more article-read-more" href="">Read more</a>
                    </article>
                </div>
                <div class="article-slider-elem">
                    <article class="article-elem"><a class="article-cover" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/content/article/article-img-1.jpg" alt="Article #1"></a>
                        <div class="article-info">
                            <div class="article-tag">Article</div>
                            <div class="article-date">14 september 14:44</div>
                        </div>
                        <div class="article-name">Effective Ways To Seamlessly Boost Your Brand Marketing</div><a class="read-more article-read-more" href="">Read more</a>
                    </article>
                </div>
            </div>
            <div class="slider-button-wrap article-slider-btn article-slider-btn-mob">
                <button class="slider-button slider-button-prev article-prev">
                    <svg class="slider-button-icon">
                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-l"></use>
                    </svg>
                </button>
                <button class="slider-button slider-button-next article-next">
                    <svg class="slider-button-icon">
                        <use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#arrow-s-r"></use>
                    </svg>
                </button>
            </div>
        </section>
        <section class="demo"><img class="demo-bg-t" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/gradient.png" alt=""><img class="demo-bg-b" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/gradient.png" alt="">
            <div class="demo-wrap">
                <div class="demo-info">
                    <div class="demo-desc">Take control of your content</div>
                    <h1 class="demo-heading">See a live demo</h1>
                    <p class="demo-text">
                        Explore our real-time audit software and example strategy reports</p>
                    <button class="btn-s btn-blue modal-o-btn demo-btn" data-modal-btn="book-modal">Book</button>
                </div>
                <div class="demo-img-wrap">
                    <picture class="demo-img">
                        <source media="(max-width: 991px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/demo/demo-img-768.png"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/demo/demo-img.png" alt="">
                    </picture>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
