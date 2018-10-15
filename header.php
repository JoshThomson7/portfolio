<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="mainHeader">
	<div class="headerLogoTwo">
		<a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri();?>/img/source-coder-logo-light.png"/></a>
	</div>
	<!---- MAIN NAV ---->
	<nav>
		<ul>
			<li class="burgerNav"><i class="fa fa-bars" aria-hidden="true"></i></li>
			<li class="navButton">GET IN TOUCH</li>
			<li class="navContactInfo"><a href="tel:07428177168">07428177168</a><a href="mailto:joshthomson15@gmail.com?subject=Website Contact&body=Hi There,%0D%0DI would like to enquire about...%0D%0DKind Regards, ">joshthomson15@gmail.com</a></li>
		</ul>
	</nav>

	<!---- SLIDEOUT NAV ---->
	<div class="slideoutNav navClosed">
		<ul>
			<li class="closeBurgerNav"><i class="fa fa-times" aria-hidden="true"></i></li>
			<a href="<?php echo home_url(); ?>/"><li>Home</li></a>
			<a href="<?php echo home_url(); ?>/my-work"><li>My Work</li></a>
			<a href="<?php echo home_url(); ?>/tws-work"><li>TWS Work</li></a>
		</ul>
		<div class="mobileContactInfo">
			<p>07428177168<br><a href="mailto:joshthomson15@gmail.com?subject=Website Contact&body=Hi There,%0D%0DI would like to enquire about...%0D%0DKind Regards, ">joshthomson15@gmail.com</a></p>
		</div>
	</div>

	<!---- QUOTE BUTTON ---->
	<div class="quoteContainer quoteClosed">
		<div id="quoteSlideDown">
			<li class="closeQuoteButton"><p>CLOSE<i class="fa fa-times" aria-hidden="true"></i></p></li>
			<h1>Request Quotation</h1>
			<?php echo do_shortcode('[contact-form-7 id="27" title="Contact form 1"]') ?>
		</div>
	</div>
</header>


