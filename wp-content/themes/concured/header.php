<!doctype html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-light.ico?light" media="(prefers-color-scheme:no-preference)">
    <?php wp_head(); ?>
</head>

<body>
	<div class="modal modal-book" data-modal="book-modal">
		<div class="modal-wrap">
			<div class="modal-bg"></div>
			<div class="modal-body">
				<div class="modal-close"><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/cross-icon.svg" alt=""></div>
				<div class="modal-content-wrap">
					<div class="modal-heading">Book Demo</div>
					<form class="modal-form form-validate" action="#" novalidate>
						<div class="modal-input-wrap"><span class="modal-input-title">Full name</span>
							<label class="modal-input-label">
								<svg class="modal-input-icon">
									<use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#login-icon"></use>
								</svg>
								<input class="modal-input" type="text" placeholder="Enter your full name" required><span class="modal-input-border"></span><span class="modal-input-error-msg">Please enter your name</span>
							</label>
						</div>
						<div class="modal-input-wrap"><span class="modal-input-title">Company name</span>
							<label class="modal-input-label">
								<svg class="modal-input-icon">
									<use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#bag"></use>
								</svg>
								<input class="modal-input" type="text" placeholder="Enter your company name" required><span class="modal-input-border"></span><span class="modal-input-error-msg">Please enter your company name</span>
							</label>
						</div>
						<div class="modal-input-wrap"><span class="modal-input-title">Business email</span>
							<label class="modal-input-label">
								<svg class="modal-input-icon">
									<use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#at-icon"></use>
								</svg>
								<input class="modal-input" type="email" placeholder="Enter your email address" required><span class="modal-input-border"></span><span class="modal-input-error-msg">Please enter a valid email address</span>
							</label>
						</div>
						<div class="modal-accept">
							<label class="modal-custom-checkbox">
								<input class="modal-custom-checkbox-input" type="checkbox" name="update"><span class="modal-custom-checkbox-elem"></span>
							</label>
							<div class="modal-accept-text">Yes, please keep me updated on concured.com latest blogs, events and offers.</div>
						</div>
						<div class="modal-btn-wrap">
							<button class="btn-s btn-grey modal-btn modal-cancel" type="button">Cancel</button>
							<input class="btn-s btn-coral modal-btn" type="submit" value="Book now">
						</div>
					</form>
				</div>
				<div class="modal-success-wrap">
					<div class="modal-success-img"><img class="modal-success-img-cloud small animate" src="<?php bloginfo('template_url'); ?>/assets/img/content/modal-success/success-img-cloud-small.png" alt="Success cloud small"><img class="modal-success-img-cloud big animate" src="<?php bloginfo('template_url'); ?>/assets/img/content/modal-success/success-img-cloud-big.png" alt="Success cloud big"><img class="modal-success-img-person animate" src="<?php bloginfo('template_url'); ?>/assets/img/content/modal-success/success-img-person.png" alt="Success person"></div>
					<div class="modal-heading">Successful registration for demo</div>
					<div class="modal-desc">Yes, please keep me updated on concured.com latest blogs, events and offers.</div>
					<div class="modal-btn-wrap">
						<button class="btn-s btn-grey modal-btn modal-cancel" type="button">Cancel</button><a class="btn-s btn-coral modal-btn" href="">Sign In</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal modal-question" data-modal="question-modal">
	<div class="modal-wrap">
		<div class="modal-bg"></div>
		<div class="modal-body">
			<div class="modal-close"><img src="<?php bloginfo('template_url'); ?>/assets/img/general/icons/cross-icon.svg" alt=""></div>
			<div class="modal-content-wrap">
				<div class="modal-heading">Ask question</div>
				<form class="modal-form form-validate" action="#" novalidate>
					<div class="modal-input-wrap"><span class="modal-input-title">Name</span>
						<label class="modal-input-label">
							<svg class="modal-input-icon">
								<use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#login-icon"></use>
							</svg>
							<input class="modal-input" type="text" placeholder="Enter your name" required><span class="modal-input-border"></span><span class="modal-input-error-msg">Please enter your name</span>
						</label>
					</div>
					<div class="modal-input-wrap"><span class="modal-input-title">Your email</span>
						<label class="modal-input-label">
							<svg class="modal-input-icon">
								<use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#at-icon"></use>
							</svg>
							<input class="modal-input" type="email" placeholder="Enter your email address" required><span class="modal-input-border"></span><span class="modal-input-error-msg">Please enter a valid email address</span>
						</label>
					</div>
					<div class="modal-input-wrap"><span class="modal-input-title">Message</span>
						<label class="modal-input-label">
							<svg class="modal-input-icon mail" fill="none">
								<use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#mail-icon"></use>
							</svg>
							<textarea class="modal-input modal-textarea" placeholder="Enter your question" rows="1" required></textarea><span class="modal-input-border"></span><span class="modal-input-error-msg">Please enter your question</span>
						</label>
					</div>
					<div class="modal-btn-wrap">
						<button class="btn-s btn-grey modal-btn modal-cancel" type="button">Cancel</button>
						<input class="btn-s btn-coral modal-btn" type="submit" value="Send">
					</div>
				</form>
			</div>
			<div class="modal-success-wrap">
				<div class="modal-heading">Successful</div>
				<div class="modal-desc">Thank you for your request!</div>
				<div class="modal-success-img"><img class="modal-success-img-rocket animate" src="<?php bloginfo('template_url'); ?>/assets/img/content/modal-success/success-img-rocket.png" alt="Modal success rocket"><img class="modal-success-img-person" src="<?php bloginfo('template_url'); ?>/assets/img/content/modal-success/success-img-person-2.png" alt="Modal success person"></div>
			</div>
		</div>
	</div>
</div>
	<div class="mobile-menu">
		<div class="mobile-menu-bg"></div>
		<div class="mobile-menu-wrap">
			<button class="mobile-menu-link mobile-menu-dd-btn">Company
				<div class="mobile-menu-dd"><a class="mobile-menu-link" href="">Platform</a><a class="mobile-menu-link" href="">Services</a></div>
			</button><a class="mobile-menu-link" href="">Partners</a><a class="mobile-menu-link" href="">Industries</a><a class="mobile-menu-link" href="">Pricing</a><a class="mobile-menu-link" href="">Blog</a>
		</div>
	</div>
	<div class="wrapper">
		<header class="header container"><a class="header-logo" href="<?= get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.svg" alt="Concured Logo"></a>
			<button class="header-menu-btn">
				<div class="header-menu-btn-cross"><span></span></div>
			</button>
			<nav class="header-nav">
				<div class="header-nav-elem header-nav-dd-btn">Company
					<div class="header-nav-dd"><a class="header-nav-dd-link" href="">Platform</a><a class="header-nav-dd-link" href="">Services</a></div>
				</div><a class="header-nav-elem" href="">Partners</a><a class="header-nav-elem" href="">Industries</a><a class="header-nav-elem" href="">Pricing</a><a class="header-nav-elem" href="">Blog</a>
			</nav>
			<div class="header-user"><a class="header-login" href="">
					<svg class="header-login-icon">
						<use href="<?php bloginfo('template_url'); ?>/assets/img/svg/symbol/sprite.svg#login-icon"></use>
					</svg>Login</a>
				<button class="btn-s btn-blue header-demo modal-o-btn" data-modal-btn="book-modal">See Demo</button>
			</div>
		</header>
