<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Polmo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="masthead navbar navbar-default navbar-fixed-top mksystem">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
					<i class="fa fa-bars"></i>
				</button>

				<?php if ( get_header_image() ) : ?>
				<a class="custom-header" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="animated" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				</a>
				
				<a id="logo_responsive" class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="animated" src="<?php echo esc_url( get_theme_mod('logo_custom_2') ); ?>" >
				</a>
				<?php else : ?>
					<h1 class="navbar-brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php endif; ?>

			</div>


			<nav id="main-menu" class="collapse navbar-collapse pull-right">
				<?php 
				wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 4,
					'container'         => 'ul',
					'fallback_cb'       => 'wp_page_menu',
					'container_class'   => 'nav navbar-nav',
					'container_id'    	=> 'main-menu',
					'menu_class'      	=> 'nav navbar-nav',
					'menu_id'         	=> '',
					'depth'           	=> 4,
					)
				);
				?>


				<div class="contact-header">
				  <ul>
				    <li>
				    	<label class="text-center">
				    		<i class="fa fa-mobile fa-lg"></i>
				    	</label> 
				    	<a href="javascript:;"><?= get_theme_mod('contact_phone', ''); ?></a>
				    </li>
				    <li>
				    	<label class="text-center">
				    		<i class="fa fa-envelope"></i>
				    	</label> 
				    	<a href="mailto:<?= get_theme_mod('contact_email', ''); ?>"><?= get_theme_mod('contact_email', ''); ?></a>
				    </li>
				  </ul>
				</div>
			</nav> <!-- /.navbar-collapse  -->
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

		</div><!-- /.container -->
	</header><!-- /#masthead -->
