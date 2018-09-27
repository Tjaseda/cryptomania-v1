<?php
/**
 * Template Name: Landing Page
 *
 * @package Cryptomania
 */

get_header( 'front' );

$front_section_1_title = get_field( 'front_section_1_title' );
$front_section_1_subtitle = get_field( 'front_section_1_subtitle' );
$front_section_1_content = get_field( 'front_section_1_content' );
$front_section_1_link_text = get_field( '$front_section_1_link_text' );
$front_section_1_link = get_field( '$front_section_1_link' );

$front_section_2_title = get_field( 'front_section_2_title' );
$front_section_2_subtitle = get_field( 'front_section_2_subtitle' );
$front_section_2_content = get_field( 'front_section_2_content' );
$front_section_2_link_text = get_field( 'front_section_2_link_text' );
$front_section_2_link = get_field( 'front_section_2_link' );

$front_section_3_title = get_field( 'front_section_3_title' );
$front_section_3_subtitle = get_field( 'front_section_3_subtitle' );
$front_section_3_content = get_field( 'front_section_3_content' );
$front_section_3_link_text = get_field( 'front_section_3_link_text' );
$front_section_3_link = get_field( 'front_section_3_link' );

$front_section_4_title = get_field( 'front_section_4_title' );
$front_section_4_embed_link = get_field( 'front_section_4_embed_link' );
$front_section_4_text = get_field( 'front_section_4_text' );
$front_section_4_share_link = get_field( 'front_section_4_share_link' );

$front_section_5_title = get_field( 'front_section_5_title' );
$front_section_5_subtitle = get_field( 'front_section_5_subtitle' );
$front_section_5_content = get_field( 'front_section_5_content' );
$front_section_5_link_text = get_field( 'front_section_5_link_text' );
$front_section_5_link = get_field( 'front_section_5_link' );
?>

		<!--WHAT IS CRYPTOMANIA PAGE SECTION -->
		<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-lg">
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
			<!-- bottom coin background image-->
			<div class="c-bg-coin c-bg-coin--bottom">
				<img class="lazyload c-bg-coin__img c-bg-coin__img--bottom" data-src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
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
					<div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pd-t--7 l-pd-t--sm-8">
						<div class="l-wrap"> <!-- takes care of padding on small screen - content does not touch the screen -->
							<?php if( $front_section_1_title ): ?>
								<h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $front_section_1_title ?></h2><br />
							<?php endif; ?>
							<?php if( $front_section_1_subtitle ): ?>
								<p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $front_section_1_subtitle ?></p><br />
							<?php endif; ?>
							<?php if( $front_section_1_content ): ?>
								<p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $front_section_1_content ?></p><br />
							<?php endif; ?>
							<?php if( $front_section_1_link ): ?>
								<a class="o-a o-txt--green o-txt--ps-left" href="<?php echo $front_section_1_link ?>" title="<?php echo $front_section_1_link_text ?>" ><i class="icon-arrow-right icon-sm"></i> <?php echo $front_section_1_link_text ?></a>
							<?php endif; ?>
						</div>
					</div>
					<!-- second column -->
					<div class="l-cl l-cl-sm--10 l-cl-ds--5">
					</div>

				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /page section -->

		<!--HOW TO PLAY PAGE SECTION -->
		<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-lg">
			<div class="l-container">
				<!-- flexbox row -->
				<div class="l-row l-row-sm--col-o l-row-ds--row-o">

					<!-- first column -->
						<div class="l-cl l-cl-sm--10 l-cl-ds--5 l-pos--rel">
							<!-- full city background that gets displayed from desktop width on-->
							<div class="c-bg-cityfull l-pos--abs">
								<img class="lazyload c-bg-cityfull__img" data-src="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?>"
								data-srcset="<?php echo get_template_directory_uri() . '/assets/images/default.png'; ?> 300w,
									<?php echo get_template_directory_uri() . '/assets/images/cityfull-small.png'; ?> 868w,
									<?php echo get_template_directory_uri() . '/assets/images/cityfull-medium.png'; ?> 1076w,
									<?php echo get_template_directory_uri() . '/assets/images/cityfull-big.png'; ?> 1120w,
									<?php echo get_template_directory_uri() . '/assets/images/cityfull-large.png'; ?> 1400w,
									<?php echo get_template_directory_uri() . '/assets/images/cityfull-hi-dpi.png'; ?> 2150w"
								sizes="(min-width: 970px) 56vw, 20vw" />
							</div>
							<!-- top image of how to play page section-->
							<div class="c-bg-cityfull__img-top">
								<img class="lazyload c-bg-cityfull__image" data-src="<?php echo get_template_directory_uri() . '/assets/images/circle-small.png'; ?>"
								data-srcset="<?php echo get_template_directory_uri() . '/assets/images/circle-small.png'; ?> 380w,
									<?php echo get_template_directory_uri() . '/assets/images/circle-medium.png'; ?> 480w,
									<?php echo get_template_directory_uri() . '/assets/images/circle-large.png'; ?> 600w,
									<?php echo get_template_directory_uri() . '/assets/images/circle-hi-dpi.png'; ?> 920w"
								sizes="(min-width: 1550px) 50vw, (min-width: 740px) 60vw, (min-width: 500px) 55vw, 75vw" />
							</div>
						</div>
						<!-- second column -->
						<div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
								<div class="l-wrap">
									<?php if( $front_section_2_title ): ?>
										<h2 class="o-h o-h__2 o-txt--white o-txt--ps-right"><?php echo $front_section_2_title ?></h2><br />
									<?php endif; ?>
									<?php if( $front_section_2_subtitle ): ?>
										<p class="o-s o-s__2 o-txt--orange-light o-txt--ps-right"><?php echo $front_section_2_subtitle ?></p><br />
									<?php endif; ?>
									<?php if( $front_section_2_content ): ?>
										<p class="o-s o-s__1 o-txt--white-tr o-txt--ps-t-right"><?php echo $front_section_2_content ?></p><br />
									<?php endif; ?>
									<?php if( $front_section_2_link ): ?>
										<a class="o-a o-txt--green o-txt--ps-right" href="<?php echo $front_section_2_link ?>" title="<?php echo $front_section_2_link_text ?>"><i class="icon-arrow-right icon-sm"></i> <?php echo $front_section_2_link_text ?></a>
									<?php endif; ?>
								</div>
						</div>

				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /page section -->

		<!--ABOUT US PAGE SECTION -->
		<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
			<div class="l-container">
				<!-- flexbox row -->
				<div class="l-row l-row-sm--col-r l-row-ds--row-o">

					<!-- first column -->
					<div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
						<div class="l-wrap">
							<?php if( $front_section_3_title ): ?>
								<h2 class="o-h o-h__2 o-txt--purple o-txt--ps-left"><?php echo $front_section_3_title ?></h2><br />
							<?php endif; ?>
							<?php if( $front_section_3_subtitle ): ?>
								<p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-left"><?php echo $front_section_3_subtitle ?></p><br />
							<?php endif; ?>
							<?php if( $front_section_3_content ): ?>
								<p class="o-s o-s__1 o-txt--gray o-txt--ps-t-left"><?php echo $front_section_3_content ?></p><br />
							<?php endif; ?>
							<?php if( $front_section_3_link ): ?>
								<a class="o-a o-txt--green o-txt--ps-left" href="<?php echo $front_section_3_link ?>" title="<?php echo $front_section_3_link_text ?>"><i class="icon-arrow-right icon-sm"></i> <?php echo $front_section_3_link_text ?></a>
							<?php endif; ?>
						</div>
					</div>
					<!-- second column -->
					<div class="l-cl l-cl-sm--10 l-cl-ds--5">
						<div class="c-img-sec__img-wrap">
							<img class="lazyload c-img-sec__img c-img-sec__img--char" data-src="<?php echo get_template_directory_uri() . '/assets/images/characters-small.png'; ?>"
							data-srcset="<?php echo get_template_directory_uri() . '/assets/images/characters-small.png'; ?> 340w,
								<?php echo get_template_directory_uri() . '/assets/images/characters-medium.png'; ?> 650w,
								<?php echo get_template_directory_uri() . '/assets/images/characters-big.png'; ?> 800w,
								<?php echo get_template_directory_uri() . '/assets/images/characters-large.png'; ?> 1000w,
								<?php echo get_template_directory_uri() . '/assets/images/characters-hi-dpi.png'; ?> 1383w"
							sizes="(min-width: 970px) 32vw, (min-width: 740px) 56vw, (min-width: 500px) 67vw, 90vw" />
						</div>
					</div>

				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /page section -->

		<!--VIDEO PAGE SECTION -->
		<div class="o-pg-sec o-pg-sec--purple o-pg-sec--pd-md">
			<div class="l-container">
				<div class="l-wrap">
					<?php if( $front_section_4_title ): ?>
						<h2 class="o-h o-h__2 o-txt--white o-txt--center"><?php echo $front_section_4_title ?></h2><br />
					<?php endif; ?>
					<!-- embeded video: must have container and wrap as it helps set the right height for the video -->
					<?php if( $front_section_4_embed_link ): ?>
						<div class="c-video__container">
							<div class="c-video__wrap">
								<iframe class="c-video__iframe" src="<?php echo $front_section_4_embed_link ?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div> <!-- /video container -->
					<?php endif; ?>
					<?php if( $front_section_4_text ): ?>
						<p class="o-h o-h__4 o-txt--orange-light o-txt--center"><?php echo $front_section_4_text ?></p>
					<?php endif; ?>
					<!-- share component -->
					<div class="c-share">
						<div class="c-share__icon-wrap">
							<a id="share" href="https://twitter.com/intent/tweet?text=<?php echo $front_section_4_share_link ?>" target="_blank"><i class="icon-Icon_Twitter_blank icon-20 c-share__icon c-share__icon--twitter"></i></a>
							<a id="share" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $front_section_4_share_link ?>" target="_blank"><i class="icon-Icon_Facebook_blank icon-20 c-share__icon c-share__icon--facebook"></i></a>
							<a id="mail" href="mailto:?Subject=<?php echo $front_section_4_share_link ?>" target="_blank"><i class="icon-email1 icon-17 c-share__icon"></i></a>
						</div>
					</div>
				</div><!-- /wrap -->
			</div><!-- /container -->
		</div><!-- /page section -->

		<!--WHATS IN THE BOX PAGE SECTION -->
		<div class="o-pg-sec o-pg-sec--white o-pg-sec--pd-md">
			<div class="l-container">
				<!-- first flex row -->
				<div class="l-row l-row-sm--col-o l-row-ds--row-o">

					<!-- first column -->
					<div class="l-cl l-cl-sm--10 l-cl-ds--5">
						<!-- whats in the box page section image -->
						<div class="c-img-sec__img-wrap c-img-sec__img-wrap--box c-img-sec__img-wrap--box-left">
							<img class="lazyload c-img-sec__img c-img-sec__img--box c-img-sec__img--box-left" data-src="<?php echo get_template_directory_uri() . '/assets/images/box-small.jpg'; ?>"
							data-srcset="<?php echo get_template_directory_uri() . '/assets/images/box-small.jpg'; ?> 300w,
								<?php echo get_template_directory_uri() . '/assets/images/box-medium.jpg'; ?> 500w,
								<?php echo get_template_directory_uri() . '/assets/images/box-big.jpg'; ?> 900w,
								<?php echo get_template_directory_uri() . '/assets/images/box-large.jpg'; ?> 1300w,
								<?php echo get_template_directory_uri() . '/assets/images/box-hi-dpi.jpg'; ?> 2305w"
							sizes="(min-width: 740px) 60vw, (min-width: 500px) 70vw, 80vw" />
						</div>
					</div>
					<!-- second column -->
					<div class="l-cl l-cl-sm--10 l-cl-ds--5 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
						<div class="l-wrap">
							<?php if( $front_section_5_title ): ?>
								<h2 class="o-h o-h__2 o-txt--purple o-txt--ps-right"><?php echo $front_section_5_title ?></h2><br />
							<?php endif; ?>
							<?php if( $front_section_5_subtitle ): ?>
								<p class="o-s o-s__2 o-txt--orange-dark o-txt--ps-right"><?php echo $front_section_5_subtitle ?></p><br />
							<?php endif; ?>
							<?php if( $front_section_5_content ): ?>
								<p class="o-s o-s__1 o-txt--gray o-txt--ps-t-right"><?php echo $front_section_5_content ?></p><br />
							<?php endif; ?>
							<?php if( $front_section_5_link ):

								?>
								<a class="o-a o-txt--green o-txt--ps-right" href="<?php echo $front_section_5_link ?>" tile="<?php echo $front_section_5_link_text ?>"><i class="icon-arrow-right icon-sm"></i> <?php echo $front_section_5_link_text ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div><!-- /row -->

				<?php

				$front_section_add_table = get_field( 'front_section_add_table' );
				$front_table_features_main_title = get_field( 'front_table_features_main_title' );
				$front_table_verison_1_title = get_field( 'front_table_verison_1_title' );
				$front_table_verison_2_title = get_field( 'front_table_verison_2_title' );

				$front_table_feature1 = get_field( 'front_table_feature1' );
				$front_table_feature1_version_1 = get_field( 'front_table_feature1_version_1' );
				$front_table_feature1_version_2 = get_field( 'front_table_feature1_version_2' );

				$front_table_feature2 = get_field( 'front_table_feature2' );
				$front_table_feature2_version_1 = get_field( 'front_table_feature2_version_1' );
				$front_table_feature2_version_2 = get_field( 'front_table_feature2_version_2' );

				$front_table_feature3 = get_field( 'front_table_feature3' );
				$front_table_feature3_version_1 = get_field( 'front_table_feature3_version_1' );
				$front_table_feature3_version_2 = get_field( 'front_table_feature3_version_2' );

				$front_table_feature4 = get_field( 'front_table_feature4' );
				$front_table_feature4_version_1 = get_field( 'front_table_feature4_version_1' );
				$front_table_feature4_version_2 = get_field( 'front_table_feature4_version_2' );

				$front_table_feature5 = get_field( 'front_table_feature5' );
				$front_table_feature5_version_1 = get_field( 'front_table_feature5_version_1' );
				$front_table_feature5_version_2 = get_field( 'front_table_feature5_version_2' );

				$front_table_feature6 = get_field( 'front_table_feature6' );
				$front_table_feature6_version_1 = get_field( 'front_table_feature6_version_1' );
				$front_table_feature6_version_2 = get_field( 'front_table_feature6_version_2' );

				$front_table_feature7 = get_field( 'front_table_feature7' );
				$front_table_feature7_version_1 = get_field( 'front_table_feature7_version_1' );
				$front_table_feature7_version_2 = get_field( 'front_table_feature7_version_2' );

				$front_table_feature8 = get_field( 'front_table_feature8' );
				$front_table_feature8_version_1 = get_field( 'front_table_feature8_version_1' );
				$front_table_feature8_version_2 = get_field( 'front_table_feature8_version_2' );

				$front_table_feature9 = get_field( 'front_table_feature9' );
				$front_table_feature9_version_1 = get_field( 'front_table_feature9_version_1' );
				$front_table_feature9_version_2 = get_field( 'front_table_feature9_version_2' );

				$front_section_add_price_table = get_field( 'front_section_add_price_table' );
				$front_section_version1_price = get_field( 'front_section_version1_price' );
				$front_section_version2_price = get_field( 'front_section_version2_price' );

				if( $front_section_add_table === 'yes' ):
				?>

					<!-- second flex row -->
					<div class="l-row table">
						<!-- first column -->
						<div class="l-cl l-cl-sm--10 l-mg-t--2 l-mg-t-md--4 l-mg-t-ds--0">
							<!-- adds top margin to this div -->
							<div class="l-mg-t-ds--10 l-w--full">
								<table class="c-table c-table--box">
									<tr>
										<?php if( $front_table_features_main_title ): ?>
											<th><?php echo $front_table_features_main_title ?></th>
										<?php endif; ?>
										<?php if( $front_table_verison_1_title ): ?>
											<th><?php echo $front_table_verison_1_title ?></th>
										<?php endif; ?>
										<?php if( $front_table_verison_2_title ): ?>
											<th><?php echo $front_table_verison_2_title ?></th>
										<?php endif; ?>
									</tr>
									<?php if( $front_table_feature1 ): ?>
									<tr>
										<td><?php echo $front_table_feature1 ?></td>
										<td><?php if( $front_table_feature1_version_1 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
										<td><?php if( $front_table_feature1_version_2 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
									</tr>
									<?php endif; ?>
									<?php if( $front_table_feature2 ): ?>
									<tr>
										<td><?php echo $front_table_feature2 ?></td>
										<td><?php if( $front_table_feature2_version_1 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
										<td><?php if( $front_table_feature2_version_2 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
									</tr>
									<?php endif; ?>
									<?php if( $front_table_feature3 ): ?>
									<tr>
										<td><?php echo $front_table_feature3 ?></td>
										<td><?php if( $front_table_feature3_version_1 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
										<td><?php if( $front_table_feature3_version_2 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
									</tr>
									<?php endif; ?>
									<?php if( $front_table_feature4 ): ?>
									<tr>
										<td><?php echo $front_table_feature4 ?></td>
										<td><?php if( $front_table_feature4_version_1 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
										<td><?php if( $front_table_feature4_version_2 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
									</tr>
									<?php endif; ?>
									<?php if( $front_table_feature5 ): ?>
									<tr>
										<td><?php echo $front_table_feature5 ?></td>
										<td><?php if( $front_table_feature5_version_1 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
										<td><?php if( $front_table_feature5_version_2 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
									</tr>
									<?php endif; ?>
									<?php if( $front_table_feature6 ): ?>
									<tr>
										<td><?php echo $front_table_feature6 ?></td>
										<td><?php if( $front_table_feature6_version_1 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
										<td><?php if( $front_table_feature6_version_2 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
									</tr>
									<?php endif; ?>
									<?php if( $front_table_feature7 ): ?>
									<tr>
										<td><?php echo $front_table_feature7 ?></td>
										<td><?php if( $front_table_feature7_version_1 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
										<td><?php if( $front_table_feature7_version_2 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
									</tr>
									<?php endif; ?>
									<?php if( $front_table_feature8 ): ?>
									<tr>
										<td><?php echo $front_table_feature8 ?></td>
										<td><?php if( $front_table_feature8_version_1 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
										<td><?php if( $front_table_feature8_version_2 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
									</tr>
									<?php endif; ?>
									<?php if( $front_table_feature9 ): ?>
									<tr>
										<td><?php echo $front_table_feature9 ?></td>
										<td><?php if( $front_table_feature9_version_1 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
										<td><?php if( $front_table_feature9_version_2 === 'yes'): ?> <i class="icon-check icon-22"></i> <?php endif; ?></td>
									</tr>
									<?php endif; ?>
								</table><!-- /box comparisone table -->

								<?php if( $front_section_add_price_table === 'yes' ): ?>
									<table class="c-table c-table--price l-pd-t--2">
										<tr>
											<th></th>
											<th><?php echo $front_section_version1_price ?></th>
											<th><?php echo $front_section_version2_price ?></th>
										</tr>
									</table><!-- /price table -->
								<?php endif; ?>

							</div>
						</div>
					</div><!-- /row -->

				<?php endif; ?>

			</div><!-- /container -->
		</div><!-- /page section -->

		<!-- TESEMONIALS PAGE SECTION -->
		<?php get_template_part( 'template-parts/testimonials' ); ?>

<?php
get_footer();
?>
