<?php
//
// Testimonials slider page section template
//
?>

<?php
  $args = array( 'post_type' => 'testimonial', 'posts_per_page' => 99, 'orderby' => 'publish_date', 'order' => 'DES' );
  $loop = new WP_Query( $args );
  $posts = get_posts($args);

  // Check if loop have posts and if it does show page section- else no page section will be shown
  if ( $loop->have_posts() ) : ?>

  <div class="o-pg-sec o-pg-sec--purple-lg o-pg-sec--pd-xs">
    <div class="l-container l-pos--rel">
      <div class="l-cl l-cl-sm--10">
        <div class="l-wrap">

        <a href="#"><i id="prev" class="icon-arrow-left icon-30 c-slider__cour c-slider__cour--prev"></i></a>
        <a href="#"><i id="next" class="icon-arrow-right icon-30 c-slider__cour c-slider__cour--next"></i></a>
        <p class="c-slider__blockquote">&#8221;</p>

        <div id="slider" class="c-slider">
          <div id="sliderWrap" class="c-slider__wrap">

          <?php
           //display each post as below template
           foreach($posts as $key=>$post):
           $title = $post->post_title;
           $content = $post->post_content;
          ?>

            <div id="slide" class="l-row l-row-sm--col-o l-row-md--row-o c-slider__slide">
              <div class="l-cl l-cl-sm--10 l-cl-md--5">
                <?php the_post_thumbnail( 'testimonial_img', array( 'class' => 'lazyload c-slider__image', 'alt' => $title, 'title' => $title ) )?>
              </div>
              <div class="l-cl l-cl-sm--10 l-cl-md--5">
                <div class="c-slider__text">
                  <p class=" c-slider__text--txt"><?php echo $content ?></p>
                  <p class="c-slider__text--name"><?php echo $title ?></p>
                </div>
              </div>
            </div>

          <?php endforeach ?>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<?php endif; wp_reset_query(); ?>
