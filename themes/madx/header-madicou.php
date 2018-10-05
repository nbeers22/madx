<?php
/**
 * The template for displaying the header for MadicoU
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<!-- #app is closed in footer.php -->
	<div id="app">

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

<!--
	<header id="top-header" class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>
		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/bug-gray.png" alt="Madico"></a>
				</div>
				<ul class="dropdown menu" v-dropdown>
		      <li>
		        <a>Navigate Site &nbsp;<i class="fas fa-chevron-down"></i></a>
		        <ul class="menu vertical">
		          <li><a href="/auto"><i class="far fa-car"></i>&nbsp; Auto</a></li>
		          <li><a href="/residential"><i class="far fa-home"></i>&nbsp; Residential</a></li>
		          <li><a href="/commercial"><i class="far fa-building"></i>&nbsp; Commercial</a></li>
		          <li><a href="/safety-security"><i class="far fa-building"></i>&nbsp; Safety &amp; Security</a></li>
		          <li><a href="/specialty-solutions"><i class="far fa-gem"></i>&nbsp; Specialty Solutions</a></li>
		          <li><a href="/dealers"><i class="fal fa-id-badge"></i></i>&nbsp; Dealers</a></li>
		          <li><a href="/madicou"><i class="far fa-building"></i>&nbsp; Madico U</a></li>
		          <li><a href="/about"><i class="far fa-building"></i>&nbsp; Company</a></li>
		        </ul>
		      </li>
		    </ul>
			</div>
			<div class="top-bar-right">
				<ul class="menu">
					<li><a href="#"><i class="fas fa-list-alt"></i>&nbsp; Performance</a></li>
					<li><a href="#"><i class="fas fa-id-badge"></i>&nbsp; Dealer Portal</a></li>
		      <li>
		        <a data-toggle="search-dropdown"><i class="fas fa-search"></i>&nbsp; Search</a>
		        <ul class="menu vertical">
		          <li class="dropdown-pane right" id="search-dropdown" data-position="bottom" v-drop-click>
								<?php get_template_part('template-parts/search/page-searchform'); ?>
		          </li>
		        </ul>
		      </li>
				</ul>
			</div>
		</nav>

	</header>
-->


<header id="top-header" class="site-header" role="banner">
	<nav class="site-navigation top-bar" role="navigation">
		<div class="top-bar-left">
			<div class="site-desktop-title top-bar-title">
				<a href="/"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/madico-dealer-portal-logo.png"></a>
			</div>
			<div class="main-menu">
				<ul class="menu">
					<li><a href="/products">Products <i class="fa fa-chevron-down"></i></a></li>
					<li><a href="./madicou">Madico U <i class="fa fa-chevron-down"></i></a></li>
					<li><a href="">Dealer Programs</a></li>
					<li><a href="">News</a></li>
				</ul>
			</div>
		</div>
		<div class="top-bar-right">
			<div class="main-menu">
				<ul class="menu">
					<li><a href=""><i class="fal fa-globe-americas faleft"></i> English <i class="fa fa-chevron-down"></i></a></li>
					<li><a href="http://madicodealers.com/customer/account/login"><i class="fal fa-lock-alt faleft"></i> Sign In</a></li>
				</ul>
			</div>
			<div class="header-btns">
				<a class="btn1 btn1-sm btn-orange btn1-invert" href="">Become a Dealer</a>
			</div>
		</div>
		<div class="clear"></div>
	</nav>
</header>