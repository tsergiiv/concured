<section class="faq container">
    <div class="info-wrap-desc sm">Frequently Asked Questions</div>
    <div class="info-wrap-heading big">FAQ</div>
    <div class="faq-wrap">
        <div class="faq-select">
            <select class="custom-select">
                <?php

                    $categories = get_categories( [
                        'taxonomy'     => 'faq-category',
                        'type'         => 'faq',
                        'child_of'     => 0,
                        'parent'       => '',
                        'hide_empty'   => 1,
                        'number'       => 0,
                        'pad_counts'   => false,
                    ] );

                    if( $categories ){
                        foreach( $categories as $cat ){
                            ?>

                            <option value="faq-<?= $cat->slug ?>"><?= $cat->name ?></option>

                            <?php
                        }
                    }

                ?>
            </select>
        </div>
        <div class="faq-tab">
            <div class="faq-tab-list">
                <?php
                    $categories = get_categories( [
                        'taxonomy'     => 'faq-category',
                        'type'         => 'faq',
                        'hide_empty'   => 0,
                    ] );

                    $n = 1;
                    if( $categories ) {
                        foreach( $categories as $cat ) {
                            ?>

                            <div class="faq-tab-link <?= $n++ == 1 ? 'active' : '' ?>" data-value="faq-<?= $cat->slug ?>">
                                <span class="faq-tab-link-name"><?= $cat->name ?></span>
                                <span class="faq-tab-link-val"><?= $cat->count ?></span>
                            </div>

                            <?php
                        }
                    }
                ?>
            </div>
            <button class="btn-big btn-coral faq-btn modal-o-btn" data-modal-btn="question-modal">Ask question</button>
        </div>
        <div class="faq-answer">
        <?php
            $categories = get_categories( [
                'taxonomy'     => 'faq-category',
                'type'         => 'faq',
                'hide_empty'   => 0,
            ] );

            $n = 1;
            if( $categories ) {
                foreach( $categories as $cat ) {
                    ?>

                    <div class="faq-tab-elem <?= $n++ == 1 ? 'active' : '' ?>" data-tab="faq-<?= $cat->slug ?>">
                        <div class="faq-answer-heading"><?= $cat->name ?></div>
                        <div class="faq-answer-wrap">
                            <?php
                                $posts = get_posts( array(
                                    'post_type'   => 'faq',
                                    'numberposts' => 10,
                                    'tax_query'   => array(
                                        array(
                                            'taxonomy' => 'faq-category',
                                            'field' => 'faq-category',
                                            'terms' => $cat->term_id,
                                        )
                                    )
                                ) );

                                foreach( $posts as $post ) {
                                    setup_postdata($post);
                                    ?>

                                    <div class="faq-answer-elem">
                                        <div class="faq-answer-question"><?= the_field('question') ?></div>
                                        <div class="faq-answer-dropdown">
                                            <div class="faq-answer-text">
                                                <?= the_field('answer') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }

                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>

                    <?php
                }
            }
        ?>
        </div>
        <button class="btn-big btn-coral faq-btn faq-btn-mob modal-o-btn" data-modal-btn="question-modal">Ask question</button>
    </div>
</section>