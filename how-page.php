<?php
/**
 * Template Name: How To Play Page
 *
 * @package Cryptomania
 */

get_header( 'child' );

$how_section_1_title = get_field( 'how_section_1_title' );
$how_section_1_subtitle = get_field( 'how_section_1_subtitle' );
$how_section_1_content = get_field( 'how_section_1_content' );

$how_section_2_title = get_field( 'how_section_2_title' );
$how_section_2_subtitle = get_field( 'how_section_2_subtitle' );
$how_section_2_content = get_field( 'how_section_2_content' );

$how_section_3_title = get_field( 'how_section_3_title' );
$how_section_3_subtitle = get_field( 'how_section_3_subtitle' );
$how_section_3_content = get_field( 'how_section_3_content' );

$how_section_4_title = get_field( 'how_section_4_title' );
$how_section_4_subtitle = get_field( 'how_section_4_subtitle' );
$how_section_4_content = get_field( 'how_section_4_content' );

$how_section_5_title = get_field( 'how_section_5_title' );
$how_section_5_subtitle = get_field( 'how_section_5_subtitle' );
$how_section_5_content = get_field( 'how_section_5_content' );

$how_section_6_title = get_field( 'how_section_6_title' );
$how_section_6_subtitle = get_field( 'how_section_6_subtitle' );
$how_section_6_content = get_field( 'how_section_6_content' );

$how_section_7_title = get_field( 'how_section_7_title' );
$how_section_7_subtitle = get_field( 'how_section_7_subtitle' );
$how_section_7_content = get_field( 'how_section_7_content' );

$how_section_8_title = get_field( 'how_section_8_title' );
$how_section_8_subtitle = get_field( 'how_section_8_subtitle' );
$how_section_8_content = get_field( 'how_section_8_content' );

$how_section_9_title = get_field( 'how_section_9_title' );
$how_section_9_subtitle = get_field( 'how_section_9_subtitle' );
$how_section_9_content = get_field( 'how_section_9_content' );

$how_section_10_title = get_field( 'how_section_10_title' );
$how_section_10_subtitle = get_field( 'how_section_10_subtitle' );
$how_section_10_content = get_field( 'how_section_10_content' );

?>

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-lg">
  <!-- top coin background image-->
  <div class="c-bg-coin c-bg-coin--top">
    <img class="lazyload c-bg-coin__img c-bg-coin__img--top" title="<?php echo $how_section_1_title ?>" alt="<?php echo $how_section_1_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
    data-srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 300w,
      <?php echo get_template_directory_uri() . '/assets/images/coin-medium.png'; ?> 600w,
      <?php echo get_template_directory_uri() . '/assets/images/coin-big.png'; ?> 810w,
      <?php echo get_template_directory_uri() . '/assets/images/coin-large.png'; ?> 1000w,
      <?php echo get_template_directory_uri() . '/assets/images/coin-hi-dpi.png'; ?> 1536w"
    sizes="(min-width: 1550px) 40vw, (min-width: 970px) 50vw, 20vw" />
  </div>

  <div class="l-container l-pd-t--8 l-pd-t-ds-md--2">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">
      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--6 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $how_section_1_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $how_section_1_title ?></h2><br />
          <?php endif; ?>
          <?php if( $how_section_1_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $how_section_1_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $how_section_1_content): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $how_section_1_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--4">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <img class="lazyload c-img-sec__img c-img-sec__img--char1" data-src="<?php echo get_template_directory_uri() . '/assets/images/char-small.png'; ?>"
          data-srcset="<?php echo get_template_directory_uri() . '/assets/images/char-small.png'; ?> 350w,
            <?php echo get_template_directory_uri() . '/assets/images/char-medium.png'; ?> 450w,
            <?php echo get_template_directory_uri() . '/assets/images/char-big.png'; ?> 620w,
            <?php echo get_template_directory_uri() . '/assets/images/char-large.png'; ?> 1113w"
          sizes="(min-width: 970px) 40vw, (min-width: 550px) 50vw, 70vw" />
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-lg">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-o l-row-ds--row-o">
      <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel l-mg-y--4 l-mg-ds--0">

          <div class="c-img-sec__img-wrap c-img-sec__img-wrap--chard">
            <img class="lazyload c-img-sec__img c-img-sec__img--chard1" title="<?php echo $how_section_2_title ?>" alt="<?php echo $how_section_2_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/start-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/start-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/start-medium.png'; ?> 350w,
              <?php echo get_template_directory_uri() . '/assets/images/start-large.png'; ?> 404w"
            sizes="15vw" />

            <img class="lazyload c-img-sec__img c-img-sec__img--chard1-bg c-img-sec__img--chard1-bg--1" title="<?php echo $how_section_2_title ?>" alt="<?php echo $how_section_2_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/start-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/start-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/start-medium.png'; ?> 350w,
              <?php echo get_template_directory_uri() . '/assets/images/start-large.png'; ?> 404w"
            sizes="15vw" />

            <img class="lazyload c-img-sec__img c-img-sec__img--chard1-bg c-img-sec__img--chard1-bg--2" title="<?php echo $how_section_2_title ?>" alt="<?php echo $how_section_2_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/start-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/start-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/start-medium.png'; ?> 350w,
              <?php echo get_template_directory_uri() . '/assets/images/start-large.png'; ?> 404w"
            sizes="15vw" />

            <img class="lazyload c-img-sec__img c-img-sec__img--chard1-bg c-img-sec__img--chard1-bg--3" data-src="<?php echo get_template_directory_uri() . '/assets/images/start-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/start-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/start-medium.png'; ?> 350w,
              <?php echo get_template_directory_uri() . '/assets/images/start-large.png'; ?> 404w"
            sizes="15vw" />
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <?php if( $how_section_2_title ): ?>
                <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $how_section_2_title ?></h2><br />
              <?php endif; ?>
              <?php if( $how_section_2_subtitle ): ?>
                <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $how_section_2_subtitle ?></p><br />
              <?php endif; ?>
              <?php if( $how_section_2_content ): ?>
                <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $how_section_2_content ?></p><br />
              <?php endif; ?>
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-lg">
  <div class="l-container">
    <!-- flexbox row   -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">

      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $how_section_3_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $how_section_3_title ?></h2><br />
          <?php endif; ?>
          <?php if( $how_section_3_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $how_section_3_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $how_section_3_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $how_section_3_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-y--4 l-mg-ds--0">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <img class="lazyload c-img-sec__img c-img-sec__img--chard2" title="<?php echo $how_section_3_title ?>" alt="<?php echo $how_section_3_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/ether-small.png'; ?>"
          data-srcset="<?php echo get_template_directory_uri() . '/assets/images/ether-small.png'; ?> 250w,
            <?php echo get_template_directory_uri() . '/assets/images/ether-medium.png'; ?> 350w,
            <?php echo get_template_directory_uri() . '/assets/images/ether-large.png'; ?> 404w"
          sizes="15vw" />
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-lg">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-o l-row-ds--row-o">

      <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel l-mg-y--4 l-mg-ds--0">
          <!-- image of how to play page section that is always displayed-->
          <div class="c-img-sec__img-wrap c-img-sec__img-wrap--chard">
            <img class="lazyload c-img-sec__img c-img-sec__img--chard1" title="<?php echo $how_section_4_title ?>" alt="<?php echo $how_section_4_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/india-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/india-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/india-medium.png'; ?> 350w,
              <?php echo get_template_directory_uri() . '/assets/images/india-large.png'; ?> 404w"
            sizes="15vw" />

            <img class="lazyload c-img-sec__img c-img-sec__img--chard1-bg c-img-sec__img--chard1-bg--1" title="<?php echo $how_section_4_title ?>" alt="<?php echo $how_section_4_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/india-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/india-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/india-medium.png'; ?> 350w,
              <?php echo get_template_directory_uri() . '/assets/images/india-large.png'; ?> 404w"
            sizes="15vw" />

            <img class="lazyload c-img-sec__img c-img-sec__img--chard1-bg c-img-sec__img--chard1-bg--2" title="<?php echo $how_section_4_title ?>" alt="<?php echo $how_section_4_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/india-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/india-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/india-medium.png'; ?> 350w,
              <?php echo get_template_directory_uri() . '/assets/images/india-large.png'; ?> 404w"
            sizes="15vw" />

            <img class="lazyload c-img-sec__img c-img-sec__img--chard1-bg c-img-sec__img--chard1-bg--3" data-src="<?php echo get_template_directory_uri() . '/assets/images/india-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/india-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/india-medium.png'; ?> 350w,
              <?php echo get_template_directory_uri() . '/assets/images/india-large.png'; ?> 404w"
            sizes="15vw" />
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <?php if( $how_section_4_title ): ?>
                <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><? echo $how_section_4_title ?></h2><br />
              <?php endif; ?>
              <?php if( $how_section_4_subtitle ): ?>
                <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><? echo $how_section_4_subtitle ?></p><br />
              <?php endif; ?>
              <?php if( $how_section_4_content ): ?>
                <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><? echo $how_section_4_content ?></p><br />
              <?php endif; ?>
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-lg">
  <div class="l-container">
    <!-- flexbox row   -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">

      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $how_section_5_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $how_section_5_title ?></h2><br />
          <?php endif; ?>
          <?php if( $how_section_5_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $how_section_5_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $how_section_5_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $how_section_5_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-y--4 l-mg-ds--0">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <img class="lazyload c-img-sec__img c-img-sec__img--chard2" title="<?php echo $how_section_5_title ?>" alt="<?php echo $how_section_1_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/chance-small.png'; ?>"
          data-srcset="<?php echo get_template_directory_uri() . '/assets/images/chance-small.png'; ?> 250w,
            <?php echo get_template_directory_uri() . '/assets/images/chance-large.png'; ?> 404w"
          sizes="15vw" />
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-lg">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-o l-row-ds--row-o">
      <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel l-mg-y--4 l-mg-ds--0">
          <!-- image of how to play page section that is always displayed-->
          <div class="c-img-sec__img-wrap c-img-sec__img-wrap--chard">
            <img class="lazyload c-img-sec__img c-img-sec__img--chard1" title="<?php echo $how_section_6_title ?>" alt="<?php echo $how_section_6_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/hacked-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/hacked-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/hacked-large.png'; ?> 404w"
            sizes="15vw" />

            <img class="lazyload c-img-sec__img c-img-sec__img--chard1-bg c-img-sec__img--chard1-bg--1" title="<?php echo $how_section_6_title ?>" alt="<?php echo $how_section_6_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/hacked-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/hacked-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/hacked-large.png'; ?> 404w"
            sizes="15vw" />

            <img class="lazyload c-img-sec__img c-img-sec__img--chard1-bg c-img-sec__img--chard1-bg--2" title="<?php echo $how_section_6_title ?>" alt="<?php echo $how_section_6_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/hacked-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/hacked-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/hacked-large.png'; ?> 404w"
            sizes="15vw" />

            <img class="lazyload c-img-sec__img c-img-sec__img--chard1-bg c-img-sec__img--chard1-bg--3" title="<?php echo $how_section_6_title ?>" alt="<?php echo $how_section_6_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/hacked-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/hacked-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/hacked-large.png'; ?> 404w"
            sizes="15vw" />
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <?php if( $how_section_6_title ): ?>
                <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $how_section_6_title ?></h2><br />
              <?php endif; ?>
              <?php if( $how_section_6_subtitle ): ?>
                <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $how_section_6_subtitle ?></p><br />
              <?php endif; ?>
              <?php if( $how_section_6_content ): ?>
                <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $how_section_6_content ?></p><br />
              <?php endif; ?>
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-lg">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">
      <!-- first column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $how_section_7_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $how_section_7_title ?></h2><br />
          <?php endif; ?>
          <?php if( $how_section_7_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $how_section_7_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $how_section_7_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $how_section_7_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-y--4 l-mg-ds--0">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <img class="lazyload c-img-sec__img c-img-sec__img--chard5" title="<?php echo $how_section_7_title ?>" alt="<?php echo $how_section_7_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/circle-small.png'; ?>"
          data-srcset="<?php echo get_template_directory_uri() . '/assets/images/circle-small.png'; ?> 380w,
            <?php echo get_template_directory_uri() . '/assets/images/circle-medium.png'; ?> 480w,
            <?php echo get_template_directory_uri() . '/assets/images/circle-large.png'; ?> 600w"
          sizes="20vw" />
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-lg">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-o l-row-ds--row-o">
      <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel l-mg-y--4 l-mg-ds--0">
          <!-- image of how to play page section that is always displayed-->
          <div class="c-bg-cityfull__img-top">
            <img class="lazyload c-img-sec__img c-img-sec__img--chard6" title="<?php echo $how_section_8_title ?>" alt="<?php echo $how_section_8_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/market-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/market-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/market-medium.png'; ?> 450w,
              <?php echo get_template_directory_uri() . '/assets/images/market-big.png'; ?> 700w"
            sizes="30vw" />
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <?php if( $how_section_8_title ): ?>
                <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $how_section_8_title ?></h2><br />
              <?php endif; ?>
              <?php if( $how_section_8_subtitle ): ?>
                <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $how_section_8_subtitle ?></p><br />
              <?php endif; ?>
              <?php if( $how_section_8_content ): ?>
                <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $how_section_8_content ?></p><br />
              <?php endif; ?>
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-lg">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-r l-row-ds--row-o">
      <!-- first column   -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
        <div class="l-wrap">
          <?php if( $how_section_9_title ): ?>
            <h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $how_section_9_title ?></h2><br />
          <?php endif; ?>
          <?php if( $how_section_9_subtitle ): ?>
            <p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $how_section_9_subtitle ?></p><br />
          <?php endif; ?>
          <?php if( $how_section_9_content ): ?>
            <p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $how_section_9_content ?></p><br />
          <?php endif; ?>
        </div>
      </div>
      <!-- second column -->
      <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-y--4 l-mg-ds--0">
        <!-- about us section image -->
        <div class="c-img-sec__img-wrap">
          <img class="lazyload c-img-sec__img c-img-sec__img--chard5" title="<?php echo $how_section_9_title ?>" alt="<?php echo $how_section_9_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/poweroff-small.png'; ?>"
          data-srcset="<?php echo get_template_directory_uri() . '/assets/images/poweroff-small.png'; ?> 250w,
            <?php echo get_template_directory_uri() . '/assets/images/poweroff-medium.png'; ?> 450w,
            <?php echo get_template_directory_uri() . '/assets/images/poweroff-big.png'; ?> 700w"
          sizes="30vw" />
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-lg">
  <div class="l-container">
    <!-- flexbox row -->
    <div class="l-row l-row-sm--col-o l-row-ds--row-o">
      <!-- first column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel l-mg-y--4 l-mg-ds--0">
          <!-- image of how to play page section that is always displayed-->
          <div class="c-img-sec__img-wrap">
            <img class="lazyload c-img-sec__img c-img-sec__img--chard6" title="<?php echo $how_section_10_title ?>" alt="<?php echo $how_section_1_title ?>" data-src="<?php echo get_template_directory_uri() . '/assets/images/throwagain-small.png'; ?>"
            data-srcset="<?php echo get_template_directory_uri() . '/assets/images/throwagain-small.png'; ?> 250w,
              <?php echo get_template_directory_uri() . '/assets/images/throwagain-medium.png'; ?> 450w,
              <?php echo get_template_directory_uri() . '/assets/images/throwagain-big.png'; ?> 700w"
            sizes="30vw" />
          </div>
        </div>
        <!-- second column -->
        <div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
            <div class="l-wrap">
              <?php if( $how_section_10_title ): ?>
                <h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $how_section_10_title ?></h2><br />
              <?php endif; ?>
              <?php if( $how_section_10_subtitle ): ?>
                <p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $how_section_10_subtitle ?></p><br />
              <?php endif; ?>
              <?php if( $how_section_10_content ): ?>
                <p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $how_section_10_content ?></p><br />
              <?php endif; ?>
            </div>
        </div>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page section -->

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
