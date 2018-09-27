<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cryptomania
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cryptomania' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="c-bg-city c-bg-city--lg">

			<div class="l-pos--rel l-row l-row-sm--row-o c-nav--full c-nav--trans c-nav--mg">
				<div class="l-c l-c-lf l-cl-sm--2 l-pos--rel">
					<a class="toggle-nav toggle-nav--front" href="#">
  					<div class="toggle-nav__line"></div>
  				</a>
				</div><!-- /empty space -->

				<nav id="site-navigation" class="js-main-nav c-nav--to-front c-nav__nav c-nav__nav--front l-cl l-cl-sm--6">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
				</nav><!-- /#site-navigation -->

				<nav id="site-navigation" class="c-nav--to-front c-nav__nav--lang l-c l-c-rg l-cl-sm--2 l-pos--rel">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-3',
							'menu_id'        => 'language-menu',
						) );
						?>
				</nav><!-- /#site-navigation -->

			</div><!-- /nav -->

			<div class="c-bg-city__img-wrap">

				<img class="c-bg-city__img" src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
																		srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 850w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-desktop.png'; ?> 1366w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-desktop-hi-dpi.png'; ?> 2732w,
																						<?php echo get_template_directory_uri() . '/assets/images/city-large-hi-dpi.png'; ?> 3840w"
																		sizes="100vw" />
				<div class="c-bg-city__overlay"></div>
			</div><!-- /c-bg-city background -->

			<div class="c-hero-front__content">
				<img class="c-hero-front__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo-small.png'; ?>"
																		srcset="<?php echo get_template_directory_uri() . '/assets/images/logo-small.png'; ?> 556w,
																						<?php echo get_template_directory_uri() . '/assets/images/logo-middle.png'; ?> 620w,
																						<?php echo get_template_directory_uri() . '/assets/images/logo-large.png'; ?> 874w,
																						<?php echo get_template_directory_uri() . '/assets/images/logo-hi-dpi.png'; ?> 1228w"
																		sizes="(min-width: 1550px) 32vw, (min-width: 970px) 620px, (min-width: 740px) 534px, (min-width: 500px) 555px, (max-width: 500px) 100vw" />
				<!-- /logo -->

				<div class="l-wrap l-mg-b--2">
					<p class="o-h o-h__3 o-txt--white o-txt--center">The Fast Cryptocurreny and Mining Pool Trading Game</p>
				</div><!-- /description -->

				<div class="c-form">
					<form class="c-form__wrap">
						<input type="email" name="email" placeholder="E-mail" class="c-form__input" />
						<input type="submit" value="Join the revolution" class="c-form__button" />
					</form>
				</div><!-- /form -->

				<div class="l-pd--10"></div><!-- space -->

			</div><!-- /hero front content -->

		</div><!-- /c-bg-city -->

	</header><!-- /#masthead -->


	<div class="c-img-board">
		<div class="c-img-board__img-wrap c-img-board__img-wrap--board">
			<img class="c-img-board__img--board" src="<?php echo get_template_directory_uri() . '/assets/images/board-hi-small.png'; ?>"
																	srcset="<?php echo get_template_directory_uri() . '/assets/images/board-small.png'; ?> 380w,
																					<?php echo get_template_directory_uri() . '/assets/images/board-middle.png'; ?> 460w,
																					<?php echo get_template_directory_uri() . '/assets/images/board-big.png'; ?> 570w,
																					<?php echo get_template_directory_uri() . '/assets/images/board-large.png'; ?> 1094w"
																	sizes="(min-width: 1550px) 30vw, (min-width: 970px) 516px, (min-width: 740px) 460px, (min-width: 500px) 422px, 76vw" />
		</div>
	</div>

	<div id="content" class="site-content">
