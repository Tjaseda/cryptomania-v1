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

		<div class="l-pos--rel c-nav--white c-nav--mg l-row l-row-sm--row-o">
			<div class="l-c l-c-lf l-cl-sm--2 l-pos--rel ">
				<a class="toggle-nav" href="#">
					<div class="toggle-nav__line"></div>
				</a><!-- /toggle nav -->

				<a href="<?php echo home_url(); ?>"><img class="c-nav__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo-2.png'; ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
			</div><!-- /logo -->

			<nav id="site-navigation" class="js-main-nav c-nav__nav c-nav__nav--page l-cl l-cl-sm--6">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

			<nav id="site-navigation" class="c-nav--to-front c-nav__nav--lang-page l-c l-c-rg l-cl-sm--2 l-pos--rel">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-3',
						'menu_id'        => 'language-menu',
					) );
					?>
			</nav><!-- /#site-navigation -->

		</div><!-- /navigation -->

		<div class="c-bg-city c-bg-city--sm">

			<div class="c-bg-city__img-wrap hero-city__img-wrap--trans">

				<img class="c-bg-city__img" src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
				srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 850w,
					<?php echo get_template_directory_uri() . '/assets/images/city-desktop.png'; ?> 1366w,
					<?php echo get_template_directory_uri() . '/assets/images/city-desktop-hi-dpi.png'; ?> 2732w,
					<?php echo get_template_directory_uri() . '/assets/images/city-large-hi-dpi.png'; ?> 3840w"
				sizes="100vw" />

				<div class="c-bg-city__overlay"></div>
			</div><!-- /c-bg-city image wrap-->

			<div class="c-hero__title-wrap">
				<h1 class="o-h o-h__1 o-txt--white o-txt--center"><?php echo get_the_title( $post->post_parent ); ?></h1>
			</div><!-- /hero__title-wrap -->

		</div><!-- /c-bg-city -->

    <?php
      // determine parent of current page
      if ($post->post_parent) {
          $ancestors = get_post_ancestors($post->ID);
          $parent = $ancestors[count($ancestors) - 1];
      } else {
          $parent = $post->ID;
      }

      $children = wp_list_pages("title_li=&child_of=" . $parent . "&echo=0");

      if ($children) {
      ?>

          <ul class="c-subnav">
              <?php
                  // current child will have class 'current_page_item'
                  echo $children;
              ?>
          </ul>

      <?php
      }
      ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
