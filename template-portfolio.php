<?php 
/* Template Name: Portfolio */
the_post() ?>

<div class="subheader-con">
	<?php get_template_part( 'blocks/img-header' ); ?>
	<img src="<?php echo THEMEURL . 'images/slider/girl-tatto.jpg' ?>">
</div>

<section id="block" class="block page-portfolio">
	<div class="header-con">
		<h1>Portfolio</h1>
		<span class="decor"></span>
	</div>

	<div class="portfolio-con clear">
		<div class="portfolio-grid">
			<?php echo do_shortcode( '[ess_grid alias="portfolio"]' ); ?>
		</div>
	</div>
</section>