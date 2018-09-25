<?php 
/* Template Name: Safety Security */
get_header(); ?>

<section class="page-hero" style="background-image: url(<?php the_field('commercial_hero_background_image'); ?>);">

	<?php get_template_part('template-parts/menus/safety-header-menu'); ?>

	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-10 medium-offset-1 cell text-center">
				<h1 class="blue"><?php the_field('commercial_hero_heading'); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('commercial_hero_subhead'); ?></p>
				<a href="<?php the_field('commercial_hero_button_link'); ?>" class="btn-yellow solid"><?php the_field('commercial_hero_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/top-level-page/film-benefits') ?>

<?php get_template_part('template-parts/top-level-page/warranty-information'); ?>

<section class="film-type">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-8 large-6 medium-offset-2 large-offset-3 cell text-center">
				<h3 class="blue"><?php the_field('safety_film_heading'); ?></h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('safety_film_subhead'); ?></p>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<!-- <div class="grid-x grid-margin-x grid-margin-y"> -->

			<?php //if( have_rows('safety_film_types') ): ?>
				<?php //while( have_rows('safety_film_types') ): the_row(); 

					// $title   = get_sub_field('safety_film_title');
					// $subhead = get_sub_field('safety_film_content');
					// $image   = get_sub_field('safety_film_image');
					// $link    = get_sub_field('safety_film_link');
					// $text    = get_sub_field('safety_film_button_text');

					?>

					<!-- <div class="medium-3 cell module auto-height text-center">
						<a href="<?php echo $link; ?>"><img src="<?php echo $image; ?>" alt="<?php echo $title; ?>"></a>
						<div class="meta" v-bind:style="metaHeight">
							<a href="#"><h4 class="blue"><?php echo $title; ?></h4></a>
							<p class="content"><?php echo $subhead; ?></p>
							<a href="#" class="btn-yellow border"><?php echo $text; ?></a>
						</div>
					</div> -->

					<safety-film-types></safety-film-types>

				<?php //endwhile; ?>
			<?php //endif; ?>

		<!-- </div> -->
	</div>
</section>

<?php get_template_part('template-parts/top-level-page/find-dealer'); ?>

<?php get_footer();