<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rtask
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'rtask'); ?></a>

		<header id="masthead" class="site-header">

			<nav id="navbar" class="navbar navbar-expand-lg navbar-dark position-fixed">
				<div class="container position-relative">
					<a class="navbar-brand d-inline-flex d-lg-none" href="/">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84 33">
							<defs>
								<clipPath id="a">
									<path fill="none" d="M0 0h28v32H0Z" data-name="Clip 2" />
								</clipPath>
								<clipPath id="b">
									<path fill="none" d="M0 0h27v33H0Z" data-name="Clip 9" />
								</clipPath>
							</defs>
							<g data-name="Group 40">
								<g data-name="Group 3">
									<path fill="none" d="M31 0h28v32H31Z" data-name="Clip 2" />
									<g clip-path="url(#a)" data-name="Group 3" transform="translate(31)">
										<path fill="#fff" d="M26 7v19c0 4 0 5 2 6h-9l1-6v-9H9v9c0 4-1 5 1 6H0c3-1 2-2 2-6V7c0-4 0-6-2-6V0h10v1C8 1 9 3 9 7v10h11V7l-1-6V0h9v1c-2 0-2 2-2 6" data-name="Fill 1" />
									</g>
								</g>
								<path fill="#fff" d="M84 31v1h-8c-5 0-6-1-11-8l-4-6 6-8s8-9 0-9V0h15v1c-3 0-6 0-16 13l11 15a7 7 0 0 0 7 2" data-name="Fill 4" />
								<path fill="#fff" d="M8 21v-3H7v3c0 1 0 10-7 10v1h14v-1c-6 0-6-9-6-10" data-name="Fill 6" />
								<g data-name="Group 10">
									<path fill="none" d="M2 0h26v33H2Z" data-name="Clip 9" />
									<g clip-path="url(#b)" data-name="Group 10" transform="translate(1)">
										<path fill="#fff" d="m27 15-2 3c-1 3-3 4-4 1L12 0H0v1a6 6 0 0 1 5 3l14 29h1l1-2 6-16" data-name="Fill 8" />
									</g>
								</g>
							</g>
						</svg></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="navbarCollapse">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<div class="navbar-collapse__inner d-flex">
							<?php

							if (have_rows('social_media', 'option')) : ?>
								<ul class="nav-social list-unstyled d-flex me-auto">
									<?php
									while (have_rows('social_media', 'option')) : the_row();
										$image = get_sub_field('image');
										$url = get_sub_field('url');
										$class = get_sub_field('class');

									?>
										<li class="<?php echo $class ?>">
											<a href="<?php echo $url ?>">
												<img src="<?php echo $image ?>" alt="">
											</a>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php
							endif; ?>


							<?php
							wp_nav_menu(array(
								'theme_location'    => 'menu-1',
								'depth'             => 1,
								'container'         => '',
								'menu_class'        => 'navbar-nav navbar-nav--1',
								'fallback_cb' => '__return_false',
								'walker'            => new bootstrap_5_wp_nav_menu_walker(),
							));
							?>
							<a class="navbar-brand d-lg-inline-flex d-none" href="/">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84 33">
									<defs>
										<clipPath id="a">
											<path fill="none" d="M0 0h28v32H0Z" data-name="Clip 2" />
										</clipPath>
										<clipPath id="b">
											<path fill="none" d="M0 0h27v33H0Z" data-name="Clip 9" />
										</clipPath>
									</defs>
									<g data-name="Group 40">
										<g data-name="Group 3">
											<path fill="none" d="M31 0h28v32H31Z" data-name="Clip 2" />
											<g clip-path="url(#a)" data-name="Group 3" transform="translate(31)">
												<path fill="#fff" d="M26 7v19c0 4 0 5 2 6h-9l1-6v-9H9v9c0 4-1 5 1 6H0c3-1 2-2 2-6V7c0-4 0-6-2-6V0h10v1C8 1 9 3 9 7v10h11V7l-1-6V0h9v1c-2 0-2 2-2 6" data-name="Fill 1" />
											</g>
										</g>
										<path fill="#fff" d="M84 31v1h-8c-5 0-6-1-11-8l-4-6 6-8s8-9 0-9V0h15v1c-3 0-6 0-16 13l11 15a7 7 0 0 0 7 2" data-name="Fill 4" />
										<path fill="#fff" d="M8 21v-3H7v3c0 1 0 10-7 10v1h14v-1c-6 0-6-9-6-10" data-name="Fill 6" />
										<g data-name="Group 10">
											<path fill="none" d="M2 0h26v33H2Z" data-name="Clip 9" />
											<g clip-path="url(#b)" data-name="Group 10" transform="translate(1)">
												<path fill="#fff" d="m27 15-2 3c-1 3-3 4-4 1L12 0H0v1a6 6 0 0 1 5 3l14 29h1l1-2 6-16" data-name="Fill 8" />
											</g>
										</g>
									</g>
								</svg>
							</a>
							<?php
							wp_nav_menu(array(
								'theme_location'    => 'menu-2',
								'depth'             => 1,
								'container'         => '',
								'menu_class'        => 'navbar-nav navbar-nav--2',
								'fallback_cb' => '__return_false',
								'walker'            => new bootstrap_5_wp_nav_menu_walker(),
							));
							?>
							<!-- <ul class="navbar-nav navbar-nav--2">
								<li class="nav-item">
									<a class="nav-link" href="#">about us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">gallery</a>
								</li>
							</ul> -->
							<a href="<?php the_field('header_button_uri', 'option') ?>" class="btn btn-light ms-lg-auto mx-auto">
								<span><?php the_field('header_button_text', 'option') ?></span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
									<path d="M552 64H144l-8-45c-3-11-13-19-24-19H12C5 0 0 5 0 12v24c0 7 5 12 12 12h80l70 356a64 64 0 0 0 46 108c35 0 64-29 64-64a64 64 0 0 0-9-32h146a64 64 0 0 0-9 32 64 64 0 1 0 108-46l1-5c4-15-8-29-23-29H204l-10-48h313c11 0 21-8 23-19l45-208c4-15-8-29-23-29zM208 472a24 24 0 1 1 0-48 24 24 0 0 1 0 48zm256 0a24 24 0 1 1 0-48 24 24 0 0 1 0 48zm23-200H185l-31-160h368l-35 160z" fill="#fff" />
								</svg></a>
						</div>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->