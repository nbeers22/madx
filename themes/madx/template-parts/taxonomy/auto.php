<?php get_template_part('template-parts/menus/auto-header-menu'); ?>
<?php $term = get_queried_object(); ?>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('intro_subhead',$term); ?></p>
			</div>
		</div>
		<div class="grid-x">

			<?php get_template_part('template-parts/taxonomy/benefits'); ?>

		</div>
	</div>
</section>

<section id="tax-posts" class="taxonomy-products" style="padding-top: 0;">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 large-8 small-offset-1 large-offset-2 text-center">
				<h2 class="blue"><?php the_field('products_heading',$term); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('products_subhead',$term); ?></p>
			</div>
		</div>

		<?php if ($term->slug != 'windshield-protection' && $term->slug != 'paint-protection') { ?>
		  
		  <auto-posts></auto-posts>
			
		<?php }else{ ?>

			<?php
				$args = array(
					'post_type' => 'auto',
					'tax_query' => array(
						array(
							'taxonomy' => 'auto_taxonomies',
							'field'    => 'slug',
							'terms'    => $term->slug
						),
					),
				);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) : $query->the_post();
			?>

				<div class="grid-x">
					<div id="single-post" class="small-10 small-offset-1 cell module auto-height">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
						<div class="meta">
							<div class="medium-12 cell">
								<div class="grid-x grid-margin-x grid-margin-y">
									<div class="medium-10 medium-offset-1 cell">
										<h4 class="blue"><?php the_title(); ?></h4>
										<div class="content"><?php the_content(); ?></div>
										<?php if (get_field('pdf_link')) { ?>
											<div class="grid-x grid-margin-y subhead">
												<div class="medium-2 large-1 cell text-center">
													<i class="fal fa-file-pdf"></i>
												</div>
												<div class="medium-10 cell">
													<a href="<?php the_field('pdf_link'); ?>" target="_blank">Product Brochure</a>
													<p>Click to download brochure</p>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; wp_reset_postdata(); ?>

		<?php } ?>

	</div>
</section>

<?php get_template_part('/template-parts/taxonomy/testimonials'); ?>

<?php get_template_part('/template-parts/taxonomy/faqs'); ?>

<?php 
if ($term->slug != 'windshield-protection' && $term->slug != 'paint-protection') { get_template_part('/template-parts/taxonomy/find-film'); } 
?>

<?php get_template_part('/template-parts/top-level-page/find-dealer'); ?>