<?php 
/* Template Name: ProtectionPro */
get_header(); ?>

<section class="hero relative" style="background-image: url(<?php the_field('about_hero_background_image'); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-6 large-4 large-offset-0 cell">
				<h1 class="white"><?php the_field('about_hero_heading'); ?></h1>
				<aside class="yellow-underline left"></aside>
				<p class="white"><?php the_field('about_hero_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="touchscreen-pro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="medium-6 cell">
						<h2 class="blue"><?php the_field('touchscreen_heading'); ?></h2>
						<aside class="yellow-underline left"></aside>
						<p><?php the_field('touchscreen_subhead'); ?></p>
						<ul class="checklist">

							<?php
							if( have_rows('touchscreen_checklist') ):
							  while ( have_rows('touchscreen_checklist') ) : the_row(); ?>

							    <li><i class="far fa-check"></i>&nbsp;&nbsp;<?php the_sub_field('list_item_text'); ?></li>

							<?php endwhile;endif; ?>

							<li><i class="far fa-check"></i>&nbsp;&nbsp;list item text here</li>
						</ul>
					</div>
					<div class="medium-6 cell text-center">
						<img src="<?php the_field('touchscreen_image'); ?>" alt="<?php the_field('touchscreen_heading'); ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="touchscreen-pro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="medium-6 small-order-2 medium-order-1 cell text-center">
						<!-- Owl Carousel goes here -->
						<div class="full-body-carousel owl-carousel owl-theme">
							
							<?php
							$args = array(
								'post_type'      => 'ppro_covers', 
								'posts_per_page' => -1,
								'orderby'        => 'menu_order',
								'order'          => 'ASC'
							);
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>

						    <div class="item" data-hash="<?php echo $post->menu_order + 1; ?>">
						    	<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
						    	<h4 style="margin-bottom:15px"><?php the_title(); ?></h4>
						    </div>

					    <?php $count++;endwhile; wp_reset_postdata(); ?>

						</div>
					<!-- End Owl Carousel -->
						
					<!-- Foundation 6 Orbit goes here -->
						<div id="swatch-carousel" class="orbit" role="region" aria-label="ProtectionPro Cases" v-f-orbit data-auto-play="false">
							<p style="margin-bottom:15px">SELECT TO PREVIEW (CLICK ARROWS TO SEE ALL PATTERNS)</p>
						  <div class="orbit-wrapper relative">
						    <div class="orbit-controls">
						      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fas fa-chevron-left"></i></button>
						      <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fas fa-chevron-right"></i></button>
						    </div>
						    <!-- CIRCULAR SWATCH CAROUSEL -->
						    <ul class="orbit-container">
						      <li class="is-active orbit-slide">

							    	<?php
								    	$swatch_count = 0;
								    	$total_post_count = wp_count_posts('ppro_covers')->publish;
								    	$args = array(
								    		'post_type'      => 'ppro_covers', 
								    		'posts_per_page' => -1,
								    		'orderby'        => 'menu_order',
								    		'order'          => 'ASC'
								    	);
								    	$loop = new WP_Query( $args );
								    	while ( $loop->have_posts() ) : $loop->the_post();
								    ?>

						      		<a href="#<?php echo $swatch_count + 1; ?>"><img src="<?php the_field('color_swatch'); ?>" alt="<?php the_title(); ?>" <?php if ($swatch_count == 0){echo 'class="active-swatch"';} ?>></a>

											<?php $swatch_count++; ?>
											<?php if ($swatch_count % 5 == 0 && $swatch_count != $total_post_count) { ?>
											  	
											</li><li class="orbit-slide">

											<?php } ?>
											<?php if ($swatch_count == $total_post_count) { ?>

											</li>

											<?php } ?>

						        <?php endwhile; wp_reset_postdata(); ?>

						    </ul>
						  </div>
						</div>
					<!-- End foundation orbit -->
					</div>

					<div class="medium-6 small-order-1 medium-order-2 cell">
						<h2 class="blue"><?php the_field('body_protection_heading'); ?></h2>
						<aside class="yellow-underline left"></aside>
						<p><?php the_field('body_subhead'); ?></p>
						<ul class="checklist">

							<?php
							if( have_rows('body_checklist') ):
							  while ( have_rows('body_checklist') ) : the_row(); ?>

							    <li><i class="far fa-check"></i>&nbsp;&nbsp;<?php the_sub_field('list_item_text'); ?></li>

							<?php endwhile;endif; ?>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-content">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-12 cell content-block">
				<div class="grid-x">
					<div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">
						<h4><?php the_field('protectionpro_contact_header'); ?></h4>
						<p class="subhead"><?php the_field('protectionpro_contact_subhead'); ?></p>
						<p>*** Contact Form Goes Here!!!! ***</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();