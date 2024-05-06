<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bookmylaundry
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<!-- <a class="skip-link screen-reader-text" href="#primary"><?php //esc_html_e( 'Skip to content', 'bookmylaundry' ); ?></a> -->


<div class="top_header">
	<div class="site_container">
		<div class="wrap_top_header top-slider">
			<div class="item-1">
				<p><span>Free Shiping <a href="#">Order Now</a></span></p>
			</div>
			<div class="item-1">
				<p><span>Subscribe our newsletter and get 10% off your first order</span></p>
			</div>
		</div>
	</div>
</div>

<header id="masthead" class="site-header site_header">
	<div class="site_container">
		<div class="navigation">
			<div class="site-branding">	
				<?php
				the_custom_logo();
				// if ( is_front_page() && is_home() ) :
				// 	?>
			
				<!-- <h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a>
			</h1> -->
				 	<?php
				// else :
				// 	?>
					<!-- <p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p> -->
			 	<?php
				// endif;
				$bookmylaundry_description = get_bloginfo( 'description', 'display' );
				if ( $bookmylaundry_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $bookmylaundry_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bookmylaundry' ); ?></button>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
				<ul>
					<li>
						<a href="#">

						<svg xmlns="http://www.w3.org/2000/svg" class="svguser" viewBox="0 0 24 24" width="24" height="24">
						<path fill="none" d="M0 0h24v24H0z"/>
						<path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
						</svg>


						</a>
					</li>
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
							<path fill="none" d="M0 0h24v24H0z"/>
							<path d="M12 2a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 9c2.67 0 8 1.34 8 4v2H4v-2c0-2.66 5.33-4 8-4z"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="dashicons dashicons-cart"></span>
						</a>
					</li>
				</ul>


			</nav><!-- #site-navigation -->
		</div>
	</div>
</header><!-- #masthead -->
