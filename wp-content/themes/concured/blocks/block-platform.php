<?php
    $posts = get_posts( array(
        'post_type' => 'platform',
    ) );

    foreach( $posts as $post ) {
        setup_postdata($post);
        ?>

        <section class="page-head container">
            <h1 class="page-head-heading"><?= the_field('top_title') ?></h1>
            <div class="page-head-desc"><?= the_field('top_text') ?></div>
            <button class="btn-big btn-coral page-head-btn modal-o-btn" data-modal-btn="book-modal"><?= the_field('top_button_text') ?></button>
        </section>
        <section class="info-wrap info-wrap-rev platform-page-content"><img class="info-wrap-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-bg-1.svg" alt="">
            <div class="info-wrap-elem-content">
                <div class="fino-wrap-t">
                    <div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/lib-icon.svg" alt=""></div>
                    <div class="info-wrap-desc sm"><?= the_field('label_1') ?></div>
                    <div class="info-wrap-heading sm"><?= the_field('title_1') ?></div>
                </div>
                <div class="info-wrap-b">
                    <ul class="custom-list">
                        <?= the_field('text_1') ?>
                    </ul><a class="read-more read-more-list" href="<?= the_field('link_url_1') ?>"><?= the_field('link_text_1') ?></a>
                </div>
            </div>
            <div class="info-wrap-img-elem"><img class="info-wrap-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/main-head-img.png" alt="Content library image"></div>
        </section>
        <section class="info-wrap info-wrap-def platform-page-analytics"><img class="info-wrap-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-bg-2.svg" alt="">
            <div class="info-wrap-img-elem">
                <picture class="info-wrap-img">
                    <source media="(max-width: 480px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/communication-img-320.png"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/communication-img.png" alt="Content analytics image">
                </picture>
            </div>
            <div class="info-wrap-elem-content">
                <div class="fino-wrap-t">
                    <div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/rocket-icon.svg" alt=""></div>
                    <div class="info-wrap-desc sm"><?= the_field('label_2') ?></div>
                    <div class="info-wrap-heading sm"><?= the_field('title_2') ?></div>
                </div>
                <div class="info-wrap-b">
                    <ul class="custom-list">
                        <?= the_field('text_2') ?>
                    </ul><a class="read-more read-more-list" href="<?= the_field('link_url_2') ?>"><?= the_field('link_text_2') ?></a>
                </div>
            </div>
        </section>
        <section class="info-wrap info-wrap-rev platform-page-strategy"><img class="info-wrap-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-bg-1.svg" alt="">
            <div class="info-wrap-elem-content">
                <div class="fino-wrap-t">
                    <div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/lib-icon.svg" alt=""></div>
                    <div class="info-wrap-desc sm"><?= the_field('label_3') ?></div>
                    <div class="info-wrap-heading sm"><?= the_field('title_3') ?></div>
                </div>
                <div class="info-wrap-b">
                    <ul class="custom-list">
                        <?= the_field('text_3') ?>
                    </ul><a class="read-more read-more-list" href="<?= the_field('link_url_3') ?>"><?= the_field('link_text_3') ?></a>
                </div>
            </div>
            <div class="info-wrap-img-elem"><img class="info-wrap-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/analytics-img.png" alt="Content library image"></div>
        </section>
        <section class="info-wrap info-wrap-def platform-page-personalisation"><img class="info-wrap-bg" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-bg-2.svg" alt="">
            <div class="info-wrap-img-elem">
                <picture class="info-wrap-img">
                    <source media="(max-width: 480px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/communication-img-320.png"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/block-img/communication-img.png" alt="Personalisation image">
                </picture>
            </div>
            <div class="info-wrap-elem-content">
                <div class="fino-wrap-t">
                    <div class="info-wrap-icon"><img class="info-wrap-icon-img" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/rocket-icon.svg" alt=""></div>
                    <div class="info-wrap-desc sm"><?= the_field('label_4') ?></div>
                    <div class="info-wrap-heading sm"><?= the_field('title_4') ?></div>
                </div>
                <div class="info-wrap-b">
                    <ul class="custom-list">
                        <?= the_field('text_4') ?>
                    </ul><a class="read-more read-more-list" href="<?= the_field('link_url_4') ?>"><?= the_field('link_text_4') ?></a>
                </div>
            </div>
        </section>
        <section class="platform-page-answer">
            <picture class="platform-page-answer-bg">
                <source media="(max-width: 480px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/content/answer/answer-bg-320.svg"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/answer/answer-bg.svg" alt="">
            </picture><img class="platform-page-answer-abstr-bg-1" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-abstr-1.png" alt=""><img class="platform-page-answer-abstr-bg-2" src="<?php bloginfo('template_url'); ?>/assets/img/content/block-bg/info-wrap-abstr-2.png" alt="">
            <div class="container">
                <h1 class="platform-page-answer-heading"><?= the_field('questions_title') ?></h1>
                <div class="platform-page-answer-wrap">
                    <div class="platform-page-answer-elem"><img class="platform-page-answer-elem-icon" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/answ-icon-1.svg" alt="">
                        <div class="platform-page-answer-elem-heading"><?= the_field('question_title_1') ?></div>
                        <p class="platform-page-answer-elem-text">
                            <?= the_field('question_text_1') ?>
                        </p>
                    </div>
                    <div class="platform-page-answer-elem"><img class="platform-page-answer-elem-icon" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/answ-icon-2.svg" alt="">
                        <div class="platform-page-answer-elem-heading"><?= the_field('question_title_2') ?></div>
                        <p class="platform-page-answer-elem-text">
                            <?= the_field('question_text_2') ?>
                        </p>
                    </div>
                    <div class="platform-page-answer-elem"><img class="platform-page-answer-elem-icon" src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/answ-icon-3.svg" alt="">
                        <div class="platform-page-answer-elem-heading"><?= the_field('question_title_3') ?></div>
                        <p class="platform-page-answer-elem-text">
                            <?= the_field('question_text_3') ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php
    }

    wp_reset_postdata();
?>