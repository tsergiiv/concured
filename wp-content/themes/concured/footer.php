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
				<div class="footer-info"><a class="footer-logo" href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.svg" alt=""></a>
					<div class="footer-info-desc">Content Auditing, Strategy and Personalization for Enterprise</div>
					<button class="btn-s btn-blue footer-info-btn modal-o-btn" data-modal-btn="book-modal">See Demo</button>
				</div>
				<div class="footer-nav">
					<div class="footer-nav-list"><span class="footer-nav-title">Platform</span><a class="footer-nav-link" href="">Library</a><a class="footer-nav-link" href="">Overview</a><a class="footer-nav-link" href="">Analytics</a><a class="footer-nav-link" href="">Pricing</a></div>
					<div class="footer-nav-list"><span class="footer-nav-title">About US</span><a class="footer-nav-link" href="">Services</a><a class="footer-nav-link" href="">About us</a><a class="footer-nav-link" href="">Clients</a><a class="footer-nav-link" href="">Contact</a></div>
					<div class="footer-nav-list"><span class="footer-nav-title">Resourses</span><a class="footer-nav-link" href="">Blog</a><a class="footer-nav-link" href="">Academy</a></div>
				</div>
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
