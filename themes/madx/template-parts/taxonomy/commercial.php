<?php get_template_part('template-parts/menus/commercial-header-menu'); ?>
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
	</div>
</section>

<section id="tax-posts" class="taxonomy-products">
	<div class="grid-container">

		<tax-term-posts></tax-term-posts>

	</div>
</section>

<?php get_template_part('/template-parts/top-level-page/find-dealer'); ?>