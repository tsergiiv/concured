		<div class="cookies">
			<div class="container cookies-wrap">
				<div class="cookies-text">
					We use cookies to offer you a better browsing experience.
					Cookies enhance site navigation, analyze site usage,
					and assist in our marketing efforts. To understand more
					about how we use cookies or to change your cookie preferences,
					click on “Cookie Settings”. By clicking “Accept All Cookies,”
					you agree to the storing of cookies on your device.
				</div>
				<div class="cookies-buttons"><a class="btn-s cookies-setting" href="">Cookies Settings</a>
					<button class="btn-s btn-coral cookies-accept">Accept All Cookies</button>
				</div>
			</div>
		</div>
		<footer class="footer container">
			<div class="footer-t">
                <?php
                $posts = get_posts( array(
                    'post_type' => 'footer',
                ) );

                foreach( $posts as $post ) {
                    setup_postdata($post);
                    ?>

                    <div class="footer-info">
                        <a class="footer-logo" href="<?= get_home_url(); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.svg" alt="">
                        </a>
                        <div class="footer-info-desc"><?= the_field('text') ?></div>
                        <button class="btn-s btn-blue footer-info-btn modal-o-btn" data-modal-btn="book-modal"><?= the_field('button_text') ?></button>
                    </div>
                    <div class="footer-nav">
                        <div class="footer-nav-list">
                            <span class="footer-nav-title"><?= the_field('menu_title_1') ?></span>
                            <?php
                                $menuParameters = [
                                    'theme_location'  => '',
                                    'menu'            => 'footer-menu-1',
                                    'container'       => false,
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => '',
                                    'menu_id'         => '',
                                    'echo'            => false,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 0,
                                    'walker'          => '',
                                    'link_class'      => 'footer-nav-link',
                                ];

                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                            ?>
                        </div>
                        <div class="footer-nav-list">
                            <span class="footer-nav-title"><?= the_field('menu_title_2') ?></span>
                            <?php
                                $menuParameters = [
                                    'theme_location'  => '',
                                    'menu'            => 'footer-menu-2',
                                    'container'       => false,
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => '',
                                    'menu_id'         => '',
                                    'echo'            => false,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 0,
                                    'walker'          => '',
                                    'link_class'      => 'footer-nav-link',
                                ];

                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                            ?>
                        </div>
                        <div class="footer-nav-list">
                            <span class="footer-nav-title"><?= the_field('menu_title_3') ?></span>
                            <?php
                                $menuParameters = [
                                    'theme_location'  => '',
                                    'menu'            => 'footer-menu-3',
                                    'container'       => false,
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => '',
                                    'menu_id'         => '',
                                    'echo'            => false,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 0,
                                    'walker'          => '',
                                    'link_class'      => 'footer-nav-link',
                                ];

                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                            ?>
                        </div>
                    </div>

                    <?php
                }

                wp_reset_postdata();
                ?>
			</div>
			<div class="footer-b">
                <?php
                    $posts = get_posts( array(
                        'post_type' => 'footer',
                    ) );

                    foreach( $posts as $post ) {
                        setup_postdata($post);
                        ?>

                        <div class="footer-b-elem"><span class="footer-copyright"><?= the_field('copyright') ?></span></div>
                        <div class="footer-b-elem">
                            <a class="footer-link" href="<?= get_home_url(); ?>/privacy-policy">Privacy Policy</a>
                            <a class="footer-link" href="<?= get_home_url(); ?>/terms-of-use">Terms of use</a>
                        </div>
                        <div class="footer-b-elem">
                            <div class="footer-social">
                                <?php if (get_field('instagram')): ?>
                                <a class="footer-social-link" href="<?= the_field('instagram') ?>" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/general/social/inst-logo.svg" alt="Instagram">
                                </a>
                                <?php endif ?>
                                <?php if (get_field('facebook')): ?>
                                <a class="footer-social-link" href="<?= the_field('facebook') ?>" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/general/social/fb-logo.svg" alt="Facebook">
                                </a>
                                <?php endif ?>
                                <?php if (get_field('youtube')): ?>
                                <a class="footer-social-link" href="<?= the_field('youtube') ?>" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/general/social/yt-logo.svg" alt="YouTube">
                                </a>
                                <?php endif ?>
                                <?php if (get_field('linkedin')): ?>
                                <a class="footer-social-link" href="<?= the_field('linkedin') ?>" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/general/social/in-logo.svg" alt="Linkedin">
                                </a>
                                <?php endif ?>
                            </div>
                        </div>

                        <?php
                    }

                    wp_reset_postdata();
                ?>
			</div>
		</footer>
	</div>

	<script type="text/javascript">
        let templateUrl = '<?= get_bloginfo("template_url"); ?>';
        // console.log(templateUrl);

        let url = '<?= get_bloginfo("url"); ?>';
        // console.log(url);
    </script>

    <?php wp_footer(); ?>

</body>
</html>
