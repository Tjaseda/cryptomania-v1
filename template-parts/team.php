<?php
//
// Team display page section template
//
?>

<?php
  $args = array( 'post_type' => 'team', 'posts_per_page' => 99, 'orderby' => 'publish_date', 'order' => 'ASC' );
  $loop = new WP_Query( $args );
  $posts = get_posts($args);

  // Check if loop have posts and if it does show page section- else no page section will be shown
  if ( $loop->have_posts() ) : ?>

    <div class="o-pg-sec o-pg-sec--purple-lg o-pg-sec--pd-md">
      <div class="l-container">
        <div class="l-row l-row--wrap l-row-sm--col-o l-row-md-lg--row-o">

        <?php
          //display each post as below template
          foreach($posts as $key=>$post):
          $title = $post->post_title;
          $position = get_field( 'team_member_position' );
          $content = $post->post_content;
        ?>

        <div class="l-cl l-cl-sm--10 l-cl-ds-lg--3">
          <div class="l-row l-row-sm--col-o l-row-md-sm--row-o l-row-ds-md--col-o c-team__wrap l-mg-y--4 l-mg-ds--0">

            <div class="l-cl l-cl-sm--10 l-cl-md-sm--4 l-cl-ds-lg--10 c-team__img-wrap">
              <?php the_post_thumbnail( 'testimonial_img', array( 'class' => 'lazyload c-team__image', 'alt' => $title, 'title' => $title ) )?>
            </div>
            <div class="l-cl l-cl-sm--10 l-cl-md-sm--6 l-cl-ds-lg--10 c-team__txt-wrap l-mg-t--3 l-mg-t-md-sm--0 l-mg-t-ds-lg--3">
              <p class="c-team__text c-team__name"><?php echo $title ?></p>
              <?php if($position): ?>
                <p class="c-team__text c-team__position"><?php echo $position ?></p>
              <?php endif; ?>
              <?php if($content): ?>
                <p class="c-team__text c-team__txt"><?php echo $content ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>

      <?php endforeach; ?>

      </div>
    </div>
  </div>

<?php endif; wp_reset_query(); ?>
