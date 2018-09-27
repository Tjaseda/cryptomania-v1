<?php
/**
 * Template Name: Characters Page
 *
 * @package Cryptomania
 */

get_header( 'child' );

$characters_section_1_title = get_field( 'characters_section_1_title' );
$characters_section_1_subtitle = get_field( 'characters_section_1_subtitle' );
$characters_section_1_content = get_field( 'characters_section_1_content' );
$characters_section_1_image = get_field( 'characters_section_1_image' );

$characters_section_2_title = get_field( 'characters_section_2_title' );
$characters_section_2_subtitle = get_field( 'characters_section_2_subtitle' );
$characters_section_2_content = get_field( 'characters_section_2_content' );
$characters_section_2_image = get_field( 'characters_section_2_image' );

$characters_section_3_title = get_field( 'characters_section_3_title' );
$characters_section_3_subtitle = get_field( 'characters_section_3_subtitle' );
$characters_section_3_content = get_field( 'characters_section_3_content' );
$characters_section_3_image = get_field( 'characters_section_3_image' );

$characters_section_4_title = get_field( 'characters_section_4_title' );
$characters_section_4_subtitle = get_field( 'characters_section_4_subtitle' );
$characters_section_4_content = get_field( 'characters_section_4_content' );
$characters_section_4_image = get_field( 'characters_section_4_image' );

$characters_section_5_title = get_field( 'characters_section_5_title' );
$characters_section_5_subtitle = get_field( 'characters_section_5_subtitle' );
$characters_section_5_content = get_field( 'characters_section_5_content' );
$characters_section_5_image = get_field( 'characters_section_5_image' );

$characters_section_6_title = get_field( 'characters_section_6_title' );
$characters_section_6_subtitle = get_field( 'characters_section_6_subtitle' );
$characters_section_6_content = get_field( 'characters_section_6_content' );
$characters_section_6_image = get_field( 'characters_section_6_image' );

$characters_section_7_title = get_field( 'characters_section_7_title' );
$characters_section_7_subtitle = get_field( 'characters_section_7_subtitle' );
$characters_section_7_content = get_field( 'characters_section_7_content' );
$characters_section_7_image = get_field( 'characters_section_7_image' );

$characters_section_8_add = get_field( 'characters_section_8_add' );
$characters_section_8_title = get_field( 'characters_section_8_title' );
$characters_section_8_subtitle = get_field( 'characters_section_8_subtitle' );
$characters_section_8_content = get_field( 'characters_section_8_content' );
$characters_section_8_image = get_field( 'characters_section_8_image' );

$characters_section_9_add = get_field( 'characters_section_9_add' );
$characters_section_9_title = get_field( 'characters_section_9_title' );
$characters_section_9_subtitle = get_field( 'characters_section_9_subtitle' );
$characters_section_9_content = get_field( 'characters_section_9_content' );
$characters_section_9_image = get_field( 'characters_section_9_image' );

$characters_section_10_add = get_field( 'characters_section_10_add' );
$characters_section_10_title = get_field( 'characters_section_10_title' );
$characters_section_10_subtitle = get_field( 'characters_section_10_subtitle' );
$characters_section_10_content = get_field( 'characters_section_10_content' );
$characters_section_10_image = get_field( 'characters_section_10_image' );

$characters_section_11_add = get_field( 'characters_section_11_add' );
$characters_section_11_title = get_field( 'characters_section_11_title' );
$characters_section_11_subtitle = get_field( 'characters_section_11_subtitle' );
$characters_section_11_content = get_field( 'characters_section_11_content' );
$characters_section_11_image = get_field( 'characters_section_11_image' );
?>

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
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

  <div class="l-container l-pd-t--7 ">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">
      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--6 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $characters_section_1_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $characters_section_1_title ?></h2><br />
          <?php endif; ?>
          <?php if( $characters_section_1_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $characters_section_1_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $characters_section_1_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $characters_section_1_content ?></p>
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--4">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <?php if( $characters_section_1_image ): ?>

          <img class="lazyload c-img-sec__img c-img-sec__img--char-top c-img-sec__img--char--right" title="<?php echo $characters_section_1_title ?>" alt="<?php echo $characters_section_1_title ?>" data-src="<?php echo $characters_section_1_image['sizes']['pgsec_img']; ?>"
          data-srcset="<?php echo $characters_section_1_image['sizes']['pgsec_img']; ?> 300w,
          <?php echo $characters_section_1_image['sizes']['pgsec_img@2x']; ?> 600w,
          <?php echo $characters_section_1_image['sizes']['pgsec_img@3x']; ?> 900w,
          <?php echo $characters_section_1_image['sizes']['pgsec_img@4x']; ?> 1200w"
          sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

        <?php endif; ?>
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-o l-row-ds--row-o">
      <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
          <!-- image of how to play page section that is always displayed-->
          <div class="c-img-sec__img-wrap">
            <?php if( $characters_section_2_image ): ?>

              <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--left" title="<?php echo $characters_section_2_title ?>" alt="<?php echo $characters_section_2_title ?>" data-src="<?php echo $characters_section_2_image['sizes']['pgsec_img']; ?>"
              data-srcset="<?php echo $characters_section_2_image['sizes']['pgsec_img']; ?> 300w,
              <?php echo $characters_section_2_image['sizes']['pgsec_img@2x']; ?> 600w,
              <?php echo $characters_section_2_image['sizes']['pgsec_img@3x']; ?> 900w,
              <?php echo $characters_section_2_image['sizes']['pgsec_img@4x']; ?> 1200w"
              sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

          <?php endif; ?>
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <?php if( $characters_section_2_title ): ?>
                <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $characters_section_2_title ?></h2><br />
              <?php endif; ?>
              <?php if( $characters_section_2_subtitle ): ?>
                <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $characters_section_2_subtitle ?></p><br />
              <?php endif; ?>
              <?php if( $characters_section_2_content ): ?>
                <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $characters_section_2_content ?></p><br />
              <?php endif; ?>
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">
      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $characters_section_3_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $characters_section_3_title ?></h2><br />
          <?php endif; ?>
          <?php if( $characters_section_3_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $characters_section_3_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $characters_section_3_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $characters_section_3_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <?php if( $characters_section_3_image ): ?>

            <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--right" title="<?php echo $characters_section_3_title ?>" alt="<?php echo $characters_section_3_title ?>"data-src="<?php echo $characters_section_3_image['sizes']['pgsec_img']; ?>"
            data-srcset="<?php echo $characters_section_3_image['sizes']['pgsec_img']; ?> 300w,
            <?php echo $characters_section_3_image['sizes']['pgsec_img@2x']; ?> 600w,
            <?php echo $characters_section_3_image['sizes']['pgsec_img@3x']; ?> 900w,
            <?php echo $characters_section_3_image['sizes']['pgsec_img@4x']; ?> 1200w"
            sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

          <?php endif; ?>
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-o l-row-ds--row-o">
      <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
          <!-- image of how to play page section that is always displayed-->
          <div class="c-img-sec__img-wrap">
            <?php if( $characters_section_4_image ): ?>

              <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--left" title="<?php echo $characters_section_4_title ?>" alt="<?php echo $characters_section_4_title ?>" data-src="<?php echo $characters_section_4_image['sizes']['pgsec_img']; ?>"
              data-srcset="<?php echo $characters_section_4_image['sizes']['pgsec_img']; ?> 300w,
              <?php echo $characters_section_4_image['sizes']['pgsec_img@2x']; ?> 600w,
              <?php echo $characters_section_4_image['sizes']['pgsec_img@3x']; ?> 900w,
              <?php echo $characters_section_4_image['sizes']['pgsec_img@4x']; ?> 1200w"
              sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

            <?php endif; ?>
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <?php if( $characters_section_4_title ): ?>
                <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $characters_section_4_title ?></h2><br />
              <?php endif; ?>
              <?php if( $characters_section_4_subtitle ): ?>
                <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $characters_section_4_subtitle ?></p><br />
              <?php endif; ?>
              <?php if( $characters_section_4_content ): ?>
                <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $characters_section_4_content ?></p><br />
              <?php endif; ?>
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">
      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $characters_section_5_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $characters_section_5_title ?></h2><br />
          <?php endif; ?>
          <?php if( $characters_section_5_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $characters_section_5_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $characters_section_5_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $characters_section_5_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <?php if( $characters_section_5_image ): ?>

            <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--right" title="<?php echo $characters_section_5_title ?>" alt="<?php echo $characters_section_5_title ?>" data-src="<?php echo $characters_section_5_image['sizes']['pgsec_img']; ?>"
            data-srcset="<?php echo $characters_section_5_image['sizes']['pgsec_img']; ?> 300w,
            <?php echo $characters_section_5_image['sizes']['pgsec_img@2x']; ?> 600w,
            <?php echo $characters_section_5_image['sizes']['pgsec_img@3x']; ?> 900w,
            <?php echo $characters_section_5_image['sizes']['pgsec_img@4x']; ?> 1200w"
            sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

          <?php endif; ?>
        </div>

      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-o l-row-ds--row-o">
      <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
          <!-- image of how to play page section that is always displayed-->
          <div class="c-img-sec__img-wrap">
            <?php if( $characters_section_6_image ): ?>

              <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--left" title="<?php echo $characters_section_6_title ?>" alt="<?php echo $characters_section_6_title ?>" data-src="<?php echo $characters_section_6_image['sizes']['pgsec_img']; ?>"
              data-srcset="<?php echo $characters_section_6_image['sizes']['pgsec_img']; ?> 300w,
              <?php echo $characters_section_6_image['sizes']['pgsec_img@2x']; ?> 600w,
              <?php echo $characters_section_6_image['sizes']['pgsec_img@3x']; ?> 900w,
              <?php echo $characters_section_6_image['sizes']['pgsec_img@4x']; ?> 1200w"
              sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

            <?php endif; ?>
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <?php if( $characters_section_6_title ): ?>
                <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $characters_section_6_title ?></h2><br />
              <?php endif; ?>
              <?php if( $characters_section_6_subtitle ): ?>
                <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $characters_section_6_subtitle ?></p><br />
              <?php endif; ?>
              <?php if( $characters_section_6_content ): ?>
                <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $characters_section_6_content ?></p><br />
              <?php endif; ?>
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">
      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $characters_section_7_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $characters_section_7_title ?></h2><br />
          <?php endif; ?>
          <?php if( $characters_section_7_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $characters_section_7_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $characters_section_7_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $characters_section_7_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <?php if( $characters_section_7_image ): ?>

            <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--right" title="<?php echo $characters_section_7_title ?>" alt="<?php echo $characters_section_7_title ?>" data-src="<?php echo $characters_section_7_image['sizes']['pgsec_img']; ?>"
            data-srcset="<?php echo $characters_section_7_image['sizes']['pgsec_img']; ?> 300w,
            <?php echo $characters_section_7_image['sizes']['pgsec_img@2x']; ?> 600w,
            <?php echo $characters_section_7_image['sizes']['pgsec_img@3x']; ?> 900w,
            <?php echo $characters_section_7_image['sizes']['pgsec_img@4x']; ?> 1200w"
            sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

          <?php endif; ?>
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<?php if( $characters_section_8_add === 'yes' ): ?>
  <div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
    <div class="l-container">
      <!-- flexbox row -->
      <div class="l-row l-row-sm--col-o l-row-ds--row-o">
        <!-- first column -->
          <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
            <!-- image of how to play page section that is always displayed-->
            <div class="c-img-sec__img-wrap">
              <?php if( $characters_section_8_image ): ?>

                <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--left" title="<?php echo $characters_section_8_title ?>" alt="<?php echo $characters_section_8_title ?>" data-src="<?php echo $characters_section_8_image['sizes']['pgsec_img']; ?>"
                data-srcset="<?php echo $characters_section_8_image['sizes']['pgsec_img']; ?> 300w,
                <?php echo $characters_section_8_image['sizes']['pgsec_img@2x']; ?> 600w,
                <?php echo $characters_section_8_image['sizes']['pgsec_img@3x']; ?> 900w,
                <?php echo $characters_section_8_image['sizes']['pgsec_img@4x']; ?> 1200w"
                sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

              <?php endif; ?>
            </div>
          </div>
          <!-- second column -->
          <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
              <div class="l-wrap">
                <?php if( $characters_section_8_title ): ?>
                  <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $characters_section_8_title ?></h2><br />
                <?php endif; ?>
                <?php if( $characters_section_8_subtitle ): ?>
                  <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $characters_section_8_subtitle ?></p><br />
                <?php endif; ?>
                <?php if( $characters_section_8_content ): ?>
                  <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $characters_section_8_content ?></p><br />
                <?php endif; ?>
              </div>
          </div>

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /page section -->

<?php endif ?>

<?php if( $characters_section_9_add === 'yes' ): ?>
  <div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
    <div class="l-container">
      <!-- flexbox row -->
      <div class="l-row l-row-sm--col-r l-row-ds--row-o">
        <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
          <div class="l-wrap">
            <?php if( $characters_section_9_title ): ?>
              <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $characters_section_9_title ?></h2><br />
            <?php endif; ?>
            <?php if( $characters_section_9_subtitle ): ?>
              <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $characters_section_9_subtitle ?></p><br />
            <?php endif; ?>
            <?php if( $characters_section_9_content ): ?>
              <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $characters_section_9_content ?></p><br />
            <?php endif; ?>
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5">
          <!-- about us section image -->
          <div class="c-img-sec__img-wrap">
            <?php if( $characters_section_9_image ): ?>

              <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--right" title="<?php echo $characters_section_9_title ?>" alt="<?php echo $characters_section_9_title ?>" data-src="<?php echo $characters_section_9_image['sizes']['pgsec_img']; ?>"
              data-srcset="<?php echo $characters_section_9_image['sizes']['pgsec_img']; ?> 300w,
              <?php echo $characters_section_9_image['sizes']['pgsec_img@2x']; ?> 600w,
              <?php echo $characters_section_9_image['sizes']['pgsec_img@3x']; ?> 900w,
              <?php echo $characters_section_9_image['sizes']['pgsec_img@4x']; ?> 1200w"
              sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

            <?php endif; ?>
          </div>
        </div>

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /page section -->
<?php endif; ?>

<?php if( $characters_section_10_add === 'yes' ): ?>
  <div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
    <div class="l-container">
      <!-- flexbox row -->
      <div class="l-row l-row-sm--col-o l-row-ds--row-o">
        <!-- first column -->
          <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
            <!-- image of how to play page section that is always displayed-->
            <div class="c-img-sec__img-wrap">
              <?php if( $characters_section_10_image ): ?>

                <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--left" title="<?php echo $characters_section_10_title ?>" alt="<?php echo $characters_section_10_title ?>" data-src="<?php echo $characters_section_10_image['sizes']['pgsec_img']; ?>"
                data-srcset="<?php echo $characters_section_10_image['sizes']['pgsec_img']; ?> 300w,
                <?php echo $characters_section_10_image['sizes']['pgsec_img@2x']; ?> 600w,
                <?php echo $characters_section_10_image['sizes']['pgsec_img@3x']; ?> 900w,
                <?php echo $characters_section_10_image['sizes']['pgsec_img@4x']; ?> 1200w"
                sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

              <?php endif; ?>
            </div>
          </div>
          <!-- second column -->
          <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
              <div class="l-wrap">
                <?php if( $characters_section_10_title ): ?>
                  <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $characters_section_10_title ?></h2><br />
                <?php endif; ?>
                <?php if( $characters_section_10_subtitle ): ?>
                  <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $characters_section_8_subtitle ?></p><br />
                <?php endif; ?>
                <?php if( $characters_section_10_content ): ?>
                  <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $characters_section_10_content ?></p><br />
                <?php endif; ?>
              </div>
          </div>

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /page section -->
<?php endif; ?>

<?php if( $characters_section_11_add === 'yes' ): ?>
  <div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
    <div class="l-container">
      <!-- flexbox row -->
      <div class="l-row l-row-sm--col-r l-row-ds--row-o">
        <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
          <div class="l-wrap">
            <?php if( $characters_section_11_title ): ?>
              <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $characters_section_11_title ?></h2><br />
            <?php endif; ?>
            <?php if( $characters_section_11_subtitle ): ?>
              <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $characters_section_11_subtitle ?></p><br />
            <?php endif; ?>
            <?php if( $characters_section_11_content ): ?>
              <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $characters_section_11_content ?></p><br />
            <?php endif; ?>
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5">
          <!-- about us section image -->
          <div class="c-img-sec__img-wrap">
            <?php if( $characters_section_11_image ): ?>

              <img class="lazyload c-img-sec__img c-img-sec__img--char c-img-sec__img--char--right" title="<?php echo $characters_section_11_title ?>" alt="<?php echo $characters_section_11_title ?>" data-src="<?php echo $characters_section_11_image['sizes']['pgsec_img']; ?>"
              data-srcset="<?php echo $characters_section_11_image['sizes']['pgsec_img']; ?> 300w,
              <?php echo $characters_section_11_image['sizes']['pgsec_img@2x']; ?> 600w,
              <?php echo $characters_section_11_image['sizes']['pgsec_img@3x']; ?> 900w,
              <?php echo $characters_section_11_image['sizes']['pgsec_img@4x']; ?> 1200w"
              sizes="(min-width: 1200px) 400px, (min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />

            <?php endif; ?>
          </div>
        </div>

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /page section -->
<?php endif; ?>

<!-- NEXT AND PREV LINKS -->
<?php

  $pagelist = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent."&sort_column=menu_order&sort_order=asc");
  $size = sizeof($pagelist);
  $pages = array();

  foreach ($pagelist as $page) {
     $pages[] += $page->ID;
  }

  $current = array_search($post->ID, $pages);
  $lastID = end($pagelist);
  $prevID;
  $nextID;

  if ($current > 0) {
    $prevID = $pages[$current-1];
  } else {
    $prevID = end($pagelist);
  }

  if ($current < ($size-1)) {
    $nextID = $pages[$current+1];
  } else {
    $nextID = $pages[0];
  }

?>

<div class="c-next">
  <div class="l-container l-pos--rel">
    <a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>"><i class="icon-arrow-left icon-25 c-next__cors c-next__cors--prev"></i></a>
    <a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>"><i class="icon-arrow-right icon-25 c-next__cors c-next__cors--next"></i></a>

    <div class="l-row">
      <div class="c-next__item c-next__item--prev">
        <div class="c-next__content">
          <a class="o-a o-txt--green c-next__content--link" href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>">Previous</a>
          <p class="c-next__content--title"><?php echo get_the_title($prevID); ?></a>
        </div>
      </div>

      <div class="c-next__item c-next__item--next">
        <div class="c-next__content">
          <a class="o-a o-txt--green c-next__content--link" href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>">Next</a>
          <p class="c-next__content--title"><?php echo get_the_title($nextID); ?></p>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
get_footer();
?>
