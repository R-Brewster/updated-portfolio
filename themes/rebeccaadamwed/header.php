<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link
    	rel="stylesheet"
    	href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
	/>

	<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;0,900;1,300;1,400&family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			//the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<!-- <h1 class="site-title"><a href="<//?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><//?php bloginfo( 'name' ); ?></a></h1> -->
				<?php
			else :
				?>
				<!-- <p class="site-title"><a href="<//?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><//?php bloginfo( 'name' ); ?></a></p> -->
				<?php
			endif;
			// $_s_description = get_bloginfo( 'description', 'display' );
			if ( $_s_description || is_customize_preview() ) :
				?>
				<!-- <p class="site-description"><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p> -->
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" x-data="{ show: false }">
			<button :class="show ? 'hamburger hamburger--collapse menu-toggle large:hidden is-active' : 'hamburger hamburger--collapse menu-toggle large:hidden'" type="button" @click="show = !show" aria-controls="primary-menu" :aria-expanded="show ? 'true' : 'false'">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
			</span>
			</button>
			<div class="desktop-nav-container hidden large:block fixed z-50 w-full">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'menu'
					)
				);
				?>
			</div>

			<div class="mobile-nav-container large:hidden" x-show="show">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'menu'
					)
				);
				?>
			</div>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->
