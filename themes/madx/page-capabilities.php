<?php 
/* Template Name: Capabilities */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="page-hero">
	<div id="header-grid" class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0">
				<?php get_template_part('template-parts/menus/specialty-header-menu'); ?>
			</div>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-8 medium-offset-2 cell text-center">
				<h1 class="blue"><?php the_title(); ?></h1>
				<aside class="yellow-underline center"></aside>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<section class="machines">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<!-- Foundation 6 Carousel/Orbit -->
				<div class="orbit" role="region" aria-label="Madico Specialty Solutions Capabilities" v-f-orbit>
				  <div class="orbit-wrapper">
				    <div class="orbit-controls">
				      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fas fa-chevron-left"></i></button>
				      <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fas fa-chevron-right"></i></button>
				    </div>
				    <div class="grid-x">
				    	<div class="small-12 large-10 large-offset-1 cell">
						    <ul class="orbit-container">

					    	  <?php

					    	  if( have_rows('slider_content') ):
					    	    while ( have_rows('slider_content') ) : the_row(); ?>

					    	      <li class="is-active orbit-slide">
					    	        <div class="grid-x">
					    	        	<div class="medium-6 cell small-order-2 medium-order-1 content-container">
					    	        		<div class="slider-content">
					    	        			<h5 class="blue"><?php the_sub_field('machine_name'); ?></h5>
					    	        			<?php the_sub_field('slider_copy'); ?>
					    	        		</div>
					    	        	</div>
					    	        	<div class="medium-6 cell bg-img small-order-1 medium-order-2" style="background-image: url(<?php the_sub_field('slider_image'); ?>)"></div>
					    	        </div>
					    	      </li>
					    	            
									<?php endwhile;endif; ?>
						      
						    </ul>
				    	</div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="industries">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0">
				<div class="grid-x grid-margin-x grid-margin-y">

					<?php

					if( have_rows('industries') ):
					  while ( have_rows('industries') ) : the_row(); ?>

					<div class="large-4 medium-6 cell module auto-height">
						<img src="<?php the_sub_field('industry_image'); ?>" alt="<?php the_sub_field('industry_heading'); ?>">
						<div class="meta">
							<h4 class="blue"><?php the_sub_field('industry_heading'); ?></h4>
							<p><?php the_sub_field('industry_copy'); ?></p>
						</div>
					</div>

					<?php endwhile;endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>

<?php 
endwhile;endif;
get_footer();