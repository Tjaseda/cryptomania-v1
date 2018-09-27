<?php
/**
 * Template Name: About Us Page
 *
 * @package Cryptomania
 */

get_header();

$about_us_title = get_field( 'about_us_title' );
$about_us_subtitle = get_field( 'about_us_subtitle' );
$about_us_content = get_field( 'about_us_content' );

?>

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-sm">
  <!-- top coin background image-->
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
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">

      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--6">
          <div class="l-wrap"> <!-- takes care of padding on small screen - content does not touch the screen -->
            <?php if( $about_us_title ): ?>
              <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $about_us_title ?></h2><br />
            <?php endif; ?>
            <?php if( $about_us_subtitle ): ?>
              <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $about_us_subtitle ?></p><br />
            <?php endif; ?>
            <?php if( $about_us_content ): ?>
              <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $about_us_content ?></p><br />
            <?php endif; ?>
          </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--4 l-mg-y--2">
        <img class="lazyload c-img-sec__img c-img-sec__img--logo" data-srcset="<?php echo get_template_directory_uri() . '/assets/images/wololo-dark.svg'; ?>" />
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->


<!--TEAM PAGE SECTION:
* page section with light purple background and small padding
-->
  <?php get_template_part( 'template-parts/team' ); ?>

<?php
get_footer();
?>
