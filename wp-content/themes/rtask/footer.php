<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rtask
 */

?>

<footer class="footer position-relative">
	<div class="footer__bg absolute">
		<?php
		$bg_id = get_field('footer_bg_image', 'option');
		$img = wp_get_attachment_image($bg_id, 'full');
		echo $img;
		?>
	</div>
	<div class="container position-relative">
		<div class="row r-logo">
			<div class="col-12 c-logo position-relative">
				<div class="r-logo__wrap">
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
				</div>
			</div>
		</div>
		<div class="row r-footer">
			<div class="col-lg-2 col-sm-6 offset-lg-2 c-footer">
				<h3 class="footer-header">About</h3>
				<?php
				wp_nav_menu(array(
					'theme_location'    => 'footer-menu-1',
					'depth'             => 1,
					'container'         => '',
					'menu_class'        => 'list-unstyled mb-lg-0 footer-menu',
					'fallback_cb' => '__return_false',
				));
				?>
			</div>
			<div class="col-lg-2 col-sm-6 c-footer">
				<h3 class="footer-header">Service</h3>
				<?php
				wp_nav_menu(array(
					'theme_location'    => 'footer-menu-2',
					'depth'             => 1,
					'container'         => '',
					'menu_class'        => 'list-unstyled mb-lg-0 footer-menu',
					'fallback_cb' => '__return_false',
				));
				?>
			</div>
			<div class="col-lg-2 col-sm-6 c-footer">
				<h3 class="footer-header">Info</h3>
				<?php
				wp_nav_menu(array(
					'theme_location'    => 'footer-menu-3',
					'depth'             => 1,
					'container'         => '',
					'menu_class'        => 'list-unstyled mb-lg-0 footer-menu',
					'fallback_cb' => '__return_false',
				));
				?>
			</div>
			<div class="col-lg-2 col-sm-6 c-footer">
				<h3 class="footer-header">Follow</h3>
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
			</div>
		</div>
		<div class="row r-copyright">
			<div class="col-12">
				<?php the_field('footer_copyright_text', 'option') ?>
			</div>
		</div>
		<div class="row r-divider">
			<div class="col-12">
				<div class="divider"></div>
			</div>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>