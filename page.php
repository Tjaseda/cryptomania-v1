<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cryptomania
 */

get_header();
?>

	<div class="o-pg-sec o-pg-sec--pd-md">
		<div class="c-bg-coin c-bg-coin--top">
			<img class="lazyload c-bg-coin__img c-bg-coin__img--top" data-src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
			data-srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 300w,
				<?php echo get_template_directory_uri() . '/assets/images/coin-medium.png'; ?> 600w,
				<?php echo get_template_directory_uri() . '/assets/images/coin-big.png'; ?> 810w,
				<?php echo get_template_directory_uri() . '/assets/images/coin-large.png'; ?> 1000w,
				<?php echo get_template_directory_uri() . '/assets/images/coin-hi-dpi.png'; ?> 1536w"
			sizes="(min-width: 1550px) 40vw, (min-width: 970px) 50vw, 20vw" />
		</div>

		<div class="l-container">
			<div class="l-wrap">
					<?php echo get_post_field('post_content', $post->ID); ?>
			</div>
		</div>
	</div>

<?php
get_footer();
