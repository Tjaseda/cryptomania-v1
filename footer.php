<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cryptomania
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="c-footer">

		<div class="l-cl c-bg-city c-bg-city--md">

			<div class="c-bg-city__img-wrap c-bg-city__img-wrap--trans">

				<img class="c-bg-city__img" src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
																		srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 850w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-desktop.png'; ?> 1366w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-desktop-hi-dpi.png'; ?> 2732w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-large-hi-dpi.png'; ?> 3840w"
																		sizes="100vw" />

				<div class="c-bg-city__overlay"></div>
			</div>

			<div class="l-w--full">

				<div class="l-wrap--sm l-mg-b--3">
					<p class="o-h o-h__2 o-txt--white o-txt--center">Available soon on Kickstarter!</p>
				</div>

				<div class="c-form l-mg-b--2">
					<form class="c-form__wrap">
						<input type="email" name="email" placeholder="E-mail" class="c-form__input" />
						<input type="submit" value="Join the revolution" class="c-form__button" />
					</form>
				</div>

			</div>

		</div>

		<div class="c-nav--purple">
			<div class="l-container">
				<div class="c-nav__site-info">
					<a href="#" title="Wololo"><i class="icon-wololo icon-30 c-nav__site-info__logo"></i></a>
					<p class="c-nav__site-info__text">© 2018 Wololo</p>
				</div>

				<nav id="site-navigation" class=" c-nav__nav c-nav__nav--footer c-nav--full-height">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer_menu',
					) );
					?>
				</nav><!-- #footer-navigation -->

				<div class="c-nav__social">
					<div>
						<a href="#" title="Twitter" target="_blank"><i class="icon-Icon_Twitter_blank icon-22 c-nav__social__icon"></i></a>
						<a href="#" title="Facebook" target="_blank"><i class="icon-Icon_Facebook_blank icon-22 c-nav__social__icon"></i></a>
					</div>
				</div>

			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
